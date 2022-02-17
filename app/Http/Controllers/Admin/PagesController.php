<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function estimatesIndex()
    {
        return Inertia::render('Static/Estimates/Index');
    }
    public function ordersIndex()
    {
        return Inertia::render('Static/Orders/Index');
    }
    public function ordersClaim()
    {
        return Inertia::render('Static/Orders/Claim');
    }
    public function ordersShow($id = null)
    {
        return Inertia::render('Static/Orders/Show');
    }
    public function productsIndex()
    {
        return Inertia::render('Static/Products/Index');
    }
    public function productsCreate()
    {
        return Inertia::render('Static/Products/Create');
    }
    public function productsEdit($id = null)
    {
        return Inertia::render('Static/Products/Edit');
    }
    public function tag($id = null)
    {
        return Inertia::render('Static/Products/Tags/Tag');
    }
    public function tagEdit($id = null)
    {
        return Inertia::render('Static/Products/Tags/Edit');
    }
    public function tagCreate($id = null)
    {
        return Inertia::render('Static/Products/Tags/Create');
    }
    public function supportsIndex()
    {
        return Inertia::render('Static/Supports/Index');
    }
    public function supportsCreate()
    {
        return Inertia::render('Static/Supports/Create');
    }
    public function supportsShow($id = null)
    {
        return Inertia::render('Static/Supports/Show');
    }
    public function indexNotice()
    {
        return Inertia::render('Static/Tenants/Announcements/Index');
    }
    public function editNotice()
    {
        return Inertia::render('Static/Tenants/Announcements/Edit');
    }
    public function createNotice()
    {
        return Inertia::render('Static/Tenants/Announcements/Create');
    }
    public function accountIndex()
    {
        return Inertia::render('Static/Accounts/Index');
    }
    public function accountCreate()
    {
        return Inertia::render('Static/Accounts/Create');
    }
    public function accountEdit()
    {
        return Inertia::render('Static/Accounts/Edit');
    }

    public function noticeIndex()
    {
        return Inertia::render('Static/Content/Notice/Index');
    }
    public function noticeCreate()
    {
        return Inertia::render('Static/Content/Notice/Create');
    }
    public function noticeEdit()
    {
        return Inertia::render('Static/Content/Notice/Edit');
    }
    public function mediaIndex()
    {
        return Inertia::render('Static/Content/Media/Index');
    }
    public function mediaCreate()
    {
        return Inertia::render('Static/Content/Media/Create');
    }
    public function mediaEdit()
    {
        return Inertia::render('Static/Content/Media/Edit');
    }
    public function faqIndex()
    {
        return Inertia::render('Static/Content/Faq/Index');
    }
    public function faqCreate()
    {
        return Inertia::render('Static/Content/Faq/Create');
    }
    public function faqEdit()
    {
        return Inertia::render('Static/Content/Faq/Edit');
    }
    public function faqcategoryIndex()
    {
        return Inertia::render('Static/Content/Faq-category/Index');
    }
    public function faqcategoryCreate()
    {
        return Inertia::render('Static/Content/Faq-category/Create');
    }
    public function faqcategoryEdit()
    {
        return Inertia::render('Static/Content/Faq-category/Edit');
    }
    public function ManufacturerIndex()
    {
        return Inertia::render('Static/Settings-EC/Manufacturer-Master/Index');
    }
    public function ManufacturerCreate()
    {
        return Inertia::render('Static/Settings-EC/Manufacturer-Master/Create');
    }
    public function ManufacturerEdit()
    {
        return Inertia::render('Static/Settings-EC/Manufacturer-Master/Edit');
    }
    public function modelIndex()
    {
        return Inertia::render('Static/Settings-EC/Model-master/Index');
    }
    public function modelCreate()
    {
        return Inertia::render('Static/Settings-EC/Model-master/Create');
    }
    public function codedefinitionIndex()
    {
        return Inertia::render('Static/Settings-EC/EC-Code-Definition/Index');
    }
    public function codedefinitionCreate()
    {
        return Inertia::render('Static/Settings-EC/EC-Code-Definition/Create');
    }
    public function index()
    {
        $settings = Setting::all();


        return Inertia::render('Static/Settings/Index', \compact('settings'));
    }
    public function consumptionIndex()
    {
        return Inertia::render('Static/Settings-EC/Consumption-Tax/Index');
    }
    public function consumptionCreate()
    {
        return Inertia::render('Static/Settings-EC/Consumption-Tax/Create');
    }
    public function emailtoIndex()
    {
        return Inertia::render('Static/Operational-support/Email-to/Index');
    }
    public function automaticIndex()
    {
        return Inertia::render('Static/Operational-support/Automatic-delivery-e-mail-text/Index');
    }
    public function rollIndex()
    {
        return Inertia::render('Static/Accounts/Roll/Index');
    }
    
    public function accessIndex()
    {
        return Inertia::render('Static/Accounts/Access-Class/Index');
    }
    public function indexTenant()
    {
        return Inertia::render('Static/Tenants/Information/Index');
    }
    public function createTenant()
    {
        return Inertia::render('Static/Tenants/Information/Create');
    }
    public function estimateView()
    {
        return Inertia::render('Static/Estimates/View');
    }
    public function tenantsShow()
    {
        return Inertia::render('Static/Tenants/Show');
    }
    public function Home()
    {
        return Inertia::render('Static/Website/Home');
    }
    public function Product()
    {
        return Inertia::render('Static/Website/Product-detail');
    }
    public function Cart()
    {
        return Inertia::render('Static/Website/Cart');
    }
    public function Checkout()
    {
        return Inertia::render('Static/Website/Checkout');
    }
    public function agentOrder()
    {
        return Inertia::render('Static/Agent-pages/Order-list');
    }
    public function quotationList()
    {
        return Inertia::render('Static/Agent-pages/Quotation-list');
    }
    public function changePassword()
    {
        return Inertia::render('Static/Agent-pages/Change-password');
    }
    public function changeProfile()
    {
        return Inertia::render('Static/Agent-pages/Profile-change');
    }
    public function changeEmail()
    {
        return Inertia::render('Static/Agent-pages/Email-change');
    }
    public function inquiryList()
    {
        return Inertia::render('Static/Agent-pages/Inquiry-list');
    }
    public function inquiry()
    {
        return Inertia::render('Static/Agent-pages/Inquiry');
    }
    public function productlist()
    {
        return Inertia::render('Static/Agent-pages/Product-list');
    }
    public function noticelist()
    {
        return Inertia::render('Static/Agent-pages/Notice-list');
    }
    public function faq()
    {
        return Inertia::render('Static/Agent-pages/Faq');
    }
    public function top()
    {
        return Inertia::render('Static/Agent-pages/Top');
    }
    
  
}
