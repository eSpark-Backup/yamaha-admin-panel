export default [
    {
        name: 'Home',
        to: '#',
        icon: 'fa fa-home',
        badge: 5
    },
    {
        name: 'Manage',
        heading: true
    },
    {
        name: 'Products',
        icon: 'fa fa-briefcase',
        children: [
            {
                name: 'HTML Templates',
                icon: 'fab fa-html5',
                children: [
                    {
                        name: 'Description',
                        to: '#',
                        icon: 'fa fa-pencil-alt'
                    },
                    {
                        name: 'Statistics',
                        to: '#',
                        icon: 'fa fa-chart-line'
                    },
                    {
                        name: 'Sales',
                        to: '#',
                        icon: 'fa fa-chart-area',
                        badge: 320
                    },
                    {
                        name: 'Media',
                        to: '#',
                        icon: 'far fa-images',
                        badge: 18
                    },
                    {
                        name: 'Files',
                        to: '#',
                        icon: 'far fa-file-alt',
                        badge: 32
                    }
                ]
            },
            {
                name: 'WordPress Themes',
                icon: 'fab fa-wordpress',
                children: [
                    {
                        name: 'Description',
                        to: '#',
                        icon: 'fa fa-pencil-alt'
                    },
                    {
                        name: 'Statistics',
                        to: '#',
                        icon: 'fa fa-chart-line'
                    },
                    {
                        name: 'Sales',
                        to: '#',
                        icon: 'fa fa-chart-area',
                        badge: 680
                    },
                    {
                        name: 'Media',
                        to: '#',
                        icon: 'far fa-images',
                        badge: 15
                    },
                    {
                        name: 'Files',
                        to: '#',
                        icon: 'far fa-file-alt',
                        badge: 20
                    }
                ]
            },
            {
                name: 'Web Applications',
                icon: 'fab fa-medapps',
                children: [
                    {
                        name: 'Description',
                        to: '#',
                        icon: 'fa fa-pencil-alt'
                    },
                    {
                        name: 'Statistics',
                        to: '#',
                        icon: 'fa fa-chart-line'
                    },
                    {
                        name: 'Sales',
                        to: '#',
                        icon: 'fa fa-chart-area',
                        badge: 158
                    },
                    {
                        name: 'Media',
                        to: '#',
                        icon: 'far fa-images',
                        badge: 65
                    },
                    {
                        name: 'Files',
                        to: '#',
                        icon: 'far fa-file-alt',
                        badge: 78
                    }
                ]
            },
            {
                name: 'Video Templates',
                icon: 'fab fa-youtube',
                children: [
                    {
                        name: 'Description',
                        to: '#',
                        icon: 'fa fa-pencil-alt'
                    },
                    {
                        name: 'Statistics',
                        to: '#',
                        icon: 'fa fa-chart-line'
                    },
                    {
                        name: 'Sales',
                        to: '#',
                        icon: 'fa fa-chart-area',
                        badge: 920
                    },
                    {
                        name: 'Media',
                        to: '#',
                        icon: 'far fa-images',
                        badge: 7
                    },
                    {
                        name: 'Files',
                        to: '#',
                        icon: 'far fa-file-alt',
                        badge: 19
                    }
                ]
            },
            {
                name: 'Add Product',
                to: '#',
                icon: 'fa fa-plus'
            }
        ]
    },
    {
        name: 'Payments',
        icon: 'fa fa-money-bill-wave',
        children: [
            {
                name: 'Scheduled',
                to: '#',
                badge: 3,
                'badge-variant': 'success'
            },
            {
                name: 'Recurring',
                to: '#'
            },
            {
                name: 'Manage',
                to: '#'
            },
            {
                name: 'New Payment',
                to: '#',
                icon: 'fa fa-plus'
            }
        ]
    },
    {
        name: 'Services',
        icon: 'fa fa-globe-americas',
        children: [
            {
                name: 'Hosting',
                to: '#'
            },
            {
                name: 'Web Design',
                to: '#'
            },
            {
                name: 'Web Development',
                to: '#'
            },
            {
                name: 'Graphic Design',
                to: '#'
            },
            {
                name: 'Legal',
                to: '#'
            },
            {
                name: 'Consulting',
                to: '#'
            }
        ]
    },
    {
        name: 'Personal',
        heading: true
    },
    {
        name: 'Profile',
        icon: 'far fa-user',
        children: [
            {
                name: 'Edit',
                to: '#'
            },
            {
                name: 'Settings',
                to: '#'
            },
            {
                name: 'Log out',
                to: '#'
            }
        ]
    }

]
