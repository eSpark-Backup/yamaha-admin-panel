import { Laravel } from '@/Helpers'

export default [
    {
        name: "EC",
        icon: "si si-basket-loaded",
        children: [
            {
                name: "見積",
                children: [
                    {
                        name: "見積一覧",
                        to: Laravel.route('superuser.estimates.index')
                    }
                ],
            },
            {
                name: "受注",
                children: [
                    {
                        name: "受注一覧"
                    },
                    {
                        name: "受注情報CSV"
                    },
                    {
                        name: "請求"
                    },
                ]
            },
            {
                name: "サポート",
                children: [
                    {
                        name: "問い合わせ",
                        to: Laravel.route('superuser.inquiries.index')
                    }
                ]
            },
            {
                name: "商品",
                children: [
                    {
                        name: "商品一覧",
                        to: Laravel.route('superuser.products.index')
                    },
                    {
                        name: "商品情報CSV",
                        to: Laravel.route('superuser.products.csv')
                    },
                    {
                        name: "商品タグ一覧",
                        to: Laravel.route('superuser.tags.index')
                    },
                    {
                        name: "商品タグ並び替え",
                        to: Laravel.route('superuser.tags.sort')
                    },
                ]
            },
            {
                name: "コンテンツ",
                children: [
                    {
                        name: "お知らせ"
                    },
                    {
                        name: "メディア"
                    },
                    {
                        name: "FAQ",
                        to: Laravel.route('superuser.faqs.index')
                    },
                    {
                        name: "FAQ並び順"
                    },
                    {
                        name: "FAQカテゴリ"
                    },
                ]
            },
            {
                name: "設定（EC販売）",
                children: [
                    {
                        name: "メーカーマスタ"
                    },
                    {
                        name: "モデルマスタ"
                    },
                    {
                        name: "ECコード定義"
                    },
                    {
                        name: "消費税"
                    },
                ]
            },
            {
                name: "設定（コンテンツ）",
                children: [
                    {
                        name: "静的コンテンツ"
                    }
                ]
            },
            {
                name: "テナント設定",
                children: [
                    {
                        name: "テナントお知らせ"
                    },
                    {
                        name: "テナント情報"
                    },
                    {
                        name: "テナント構造ツリー"
                    },
                ]
            },
        ]
    },
    {
        name: "CRM",
        icon: "si si-layers",
        children: [
            {
                name: "会員",
                children: [
                    {
                        name: "会員一覧",
                        to: ""
                    }
                ]
            }
        ]
    },
    {
        name: "ADMIN",
        icon: "si si-diamond",
        children: [
            {
                name: "アカウント",
                children: [
                    {
                        name: "アカウント",
                        to: ""
                    },
                    {
                        name: "ロール",
                        to: ""
                    },
                    {
                        name: "アクセスクラス",
                        to: ""
                    },
                ]
            },
            {
                name: "運用支援",
                children: [
                    {
                        name: "メール送信先",
                        to: ""
                    },
                    {
                        name: "自動配信メール文面",
                        to: ""
                    },
                ]
            },
            {
                name: "設定（基本）",
                children: [
                    {
                        name: "サイト基本情報",
                        to: ""
                    }
                ]
            },
            {
                name: "テナント設定",
                children: [
                    {
                        name: "テナントお知らせ"
                    },
                    {
                        name: "テナント情報"
                    }
                ]
            },
        ]
    },

    // {
    //     name: 'Dashboard',
    //     to: '/dashboard',
    //     icon: 'si si-speedometer'
    // },

    // {
    //     name: 'eCommerce',
    //     heading: true
    // },
    // {
    //     name: 'Estimates',
    //     icon: 'si si-envelope-letter',
    //     to: Laravel.route('superuser.estimates.index'),
    // },
    // {
    //     name: 'Orders',
    //     icon: 'si si-docs',
    //     children: [
    //         {
    //             name: 'Placed',
    //             to: Laravel.route('superuser.orders.index')
    //         },
    //         {
    //             name: 'Claims',
    //             to: '/admin/claims'
    //         }
    //     ]
    // },
    // {
    //     name: 'Products',
    //     icon: 'si si-basket-loaded',
    //     to: Laravel.route('superuser.products.index')
    // },
    // {
    //     name: "Miscellaneous",
    //     icon: "si si-layers",
    //     children: [
    //         // { name: "Bag support", to: "" },
    //         // { name: "Capacity", to: "" },
    //         // { name: "Color", to: "" },
    //         // { name: "Degree", to: "" },
    //         // { name: "Genre", to: "" },
    //         { name: "Manufacturers", to: Laravel.route('superuser.manufacturers.index') },
    //         { name: "Models", to: Laravel.route('superuser.models.index') },
    //         // { name: "Power", to: "" },
    //         { name: "Tags", to: Laravel.route('superuser.tags.index') },
    //         // { name: "Window Shield", to: "" },
    //     ]
    // },



    // {
    //     name: 'Support',
    //     heading: true
    // },
    // {
    //     name: 'Inquiries',
    //     icon: 'si si-energy',
    //     to: Laravel.route('superuser.inquiries.index')
    // },



    // {
    //     name: 'Website',
    //     heading: true
    // },
    // {
    //     name: 'Settings',
    //     icon: 'si si-settings',
    //     to: '/admin/settings'
    // },

    // {
    //     name: 'Administration',
    //     heading: true
    // },
    // {
    //     name: 'Users',
    //     icon: 'si si-user',
    //     to: Laravel.route('superuser.users.index')
    // },
    // {
    //     name: 'Tenants',
    //     icon: 'si si-organization',
    //     to: Laravel.route('superuser.tenants.index')
    // },

    // {
    //     name: "Miscellaneous",
    //     icon: "si si-layers",
    //     children: [
    //         { name: "Departments", to: Laravel.route('superuser.departments.index') },
    //         { name: "Prefectures", to: Laravel.route('superuser.prefectures.index') },
    //         { name: "Tenant Groups", to: Laravel.route('superuser.groups.index') },
    //         { name: "User Roles", to: Laravel.route('superuser.roles.index') },
    //     ]
    // },



]
