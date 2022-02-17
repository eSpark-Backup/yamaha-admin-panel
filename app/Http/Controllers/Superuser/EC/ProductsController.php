<?php

namespace App\Http\Controllers\Superuser\EC;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\SimpleExcel\SimpleExcelWriter;
use App\Models\{Tag, Product, Manufacturer, Media, Meta, ProductModel, Prefecture, Tenant};

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()
            ->with('model', 'manufacturer')
            ->{request()->has('all') ? 'get' : 'paginate'}();

        return Inertia::render('Superuser/EC/Comodity/Products/Index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ProductModel::all();
        $manufacturers = Manufacturer::all();
        $prefectures = Prefecture::all();
        $tenants = Tenant::all();

        return Inertia::render('Superuser/EC/Comodity/Products/Create', [
            'models' => $models,
            'manufacturers' => $manufacturers,
            'prefectures' => $prefectures,
            'tenants' => $tenants
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arguments = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string', 'max:50'],
            'tenant_id' => ['required', 'integer', 'exists:tenants,id'],
            'prefecture_id' => ['required', 'integer', 'exists:prefectures,id'],
            'product_model_id' => ['required', 'integer', 'exists:product_models,id'],
            'manufacturer_id' => ['required', 'integer', 'exists:manufacturers,id'],
            'registration_type' => ['required', 'string'],
            'comments' => ['nullable', 'string'],
            'status' => ['nullable', 'integer'],
        ]);

        $product = Product::create(\array_merge($arguments, ['user_id' => \auth()->id()]));

        return \redirect()->route('superuser.products.edit', $product)
            ->with('success', ['product_created' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product->load('tags', 'media');
        $tags = Tag::all();
        $models = ProductModel::all();
        $manufacturers = Manufacturer::all();
        $prefectures = Prefecture::all();
        $tenants = Tenant::all();

        return Inertia::render('Superuser/EC/Comodity/Products/Edit', [
            'tags' => $tags,
            'models' => $models,
            'product' => $product,
            'manufacturers' => $manufacturers,
            'prefectures' => $prefectures,
            'tenants' => $tenants
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $arguments = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string', 'max:50'],
            'tenant_id' => ['required', 'integer', 'exists:tenants,id'],
            'prefecture_id' => ['required', 'integer', 'exists:prefectures,id'],
            'product_model_id' => ['required', 'integer', 'exists:product_models,id'],
            'manufacturer_id' => ['required', 'integer', 'exists:manufacturers,id'],
            'registration_type' => ['required', 'string'],
            'comments' => ['nullable', 'string'],
            'status' => ['nullable', 'integer'],
        ]);

        return \back()->with('success', ['product_updated' => $product->update($arguments)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return \redirect()->route('superuser.products.index')->with('success', [
            'product_deleted' => $product->delete()
        ]);
    }



    /**
     * Store a newly created product media resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function galleryStore(Request $request, Product $product)
    {
        $request->validate([
            'title' => ['nullable'],
            'caption' => ['nullable'],
            'order' => ['nullable'],
            'media' => ['required'],
        ]);

        $media = ['type' => '', 'path' => ""];

        if ($request->hasFile('media')) {

            $file = $request->file('media');

            $media['type'] = $file->getClientMimeType();

            $media['path'] = $file->storePubliclyAs(

                'public/uploads' . \DIRECTORY_SEPARATOR . \date('Y/m'),

                \md5(\now()) . ".{$file->clientExtension()}"

            );
        }

        $media = $product->media()->create(\array_merge(['user_id' => \auth()->id()], $media, $request->only('title', 'caption', 'order')));

        return \redirect()->route('superuser.products.edit', $product)->with('success', ['media_created' => $media->id]);
    }


    public function galleryDestroy(Media $media)
    {

        return \back()->with('success', [
            'media_deleted' => $media->delete()
        ]);
    }

    public function csv(Product $product)
    {

        $product = $product->when(\request('registered_from') || \request('registered_to'), function ($query) {
            $between_created_at = [\request('registered_from', \now()->subYear(1)->format('Y-m-d')), \request('registered_to', \now()->format('Y-m-d'))];
            $query->whereBetween('created_at', $between_created_at);
        });


        $product = $product->when(\request('purchased_from') || \request('purchased_to'), function ($query) {
            $query->whereHas('metadata',  function ($metadata) {

                $between = [\request('purchased_from', \now()->subYear(1)->format('Y-m-d')), \request('purchased_to', \now()->format('Y-m-d'))];

                $metadata->where('key', 'purchased_at')->whereBetween('value', $between);
            });
        });

        $product = $product->when(\request('sale_from') || \request('sale_to'), function ($query) {
            $query->whereHas('metadata',  function ($metadata) {

                $between = [\request('sale_from', \now()->subYear(1)->format('Y-m-d')), \request('sale_to', \now()->format('Y-m-d'))];

                $metadata->where('key', 'sale_started_at')->whereBetween('value', $between);
            });
        });

        $product = $product->when(\request('published_from') || \request('published_to'), function ($query) {
            $query->whereHas('metadata',  function ($metadata) {

                $between = [\request('published_from', \now()->subYear(1)->format('Y-m-d')), \request('published_to', \now()->format('Y-m-d'))];

                $metadata->where('key', 'published_at')->whereBetween('value', $between);
            });
        });


        $products = $product->with('model', 'manufacturer')->get();

        if (\request()->has('download')) {
            $this->downloadCSV($products);
        }

        return Inertia::render('Superuser/EC/Comodity/Products/Csv', [
            'products' => $products
        ]);
    }



    protected function downloadCSV($products)
    {
        $writer = SimpleExcelWriter::streamDownload(\md5(\now()) . '.csv');

        $writer->addRows($products->map(function ($product) {

            $meta = (object)$product->meta->toArray();

            return [
                "商品ID" => $product->id, // Product ID
                "モデル名" => $product?->model?->name, // Model Name
                "メーカー名称" => $product?->manufacturer?->name, // Manufacturer Name
                "商品説明" => $product->description, // Description of item
                "登録区分" => $product->registration_type, // Registration division
                "内部メモ" => $product?->internal_memo, // Internal Memo
                "販売停止設定" => "", // Sales Suspension Setting
                "販売開始日時" => "", // Sales Start Date And Time
                "販売終了日" => "", // End of sale date
                "公開終了日" => "", // Release end date
                "おすすめに表示する" => "", // Display as a recommendation
                "仕入年月日" => $meta?->purchased_at, // Purchase Date
                "仕入元顧客名称" => $meta?->supplier, // Supplier Customer Name
                "仕入元県" => "", // Purchasing source prefecture
                "仕入金額" => $meta?->purchase_price, // The purchase amount
                "仕入（買取）時配送料" => $meta?->shipping_fee, // Shipping fee at the time of purchase (purchase)
                "補修コスト" => $meta?->repair_cost, // Repair cost
                "仕入元紹介特約店" => "", // Supplier introduction distributor
                "保管（出荷）場所" => $meta?->storage_location, // Storage (shipping) location
                "製造年月日" => $meta?->manufactured_at, // Made Date
                "本社出荷年" => $meta?->shipping_year, // Headquarters shipping year
                "型式" => $meta?->model, // Model
                "号機" => $meta?->unit, // Unit
                "ジャンル" => $meta?->genre, // Genre
                "動力" => $meta?->power, // Power
                "定員" => $meta?->capacity, // Capacity
                "色" => $meta?->color, // Colour
                "ウィンドウシールド仕様" => $meta?->window_shield, // Window Shield Specifications
                "バッグサポート" => $meta?->bag_support, // Bag Support
                "ＲＯＭ仕様" => $meta?->rom_specification, // ROM Specifications
                "ОＰ付属" => $meta?->op_included, // OP Included
                "程度" => $meta?->degree, // Degree
                "メーカー整備" => $meta?->maintenance, // Manufacturer Maintenance
                "補修個所" => $meta?->repair_location, // Repair Location
                "備考" => $meta?->remark, // Remarks
                "仕切額" => $meta?->partition_amount, // Partition Amount
            ];
        }))->toBrowser();
    }
}
