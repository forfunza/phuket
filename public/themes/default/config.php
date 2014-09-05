<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('OH Phuket - Travel ,Tour ,Trip ,Hotel');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            //$theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');

                $theme->asset()->usePath()->add('core', 'css/style.css');
                $theme->asset()->usePath()->add('grid', 'css/grid.css', array('core'));
                $theme->asset()->usePath()->add('responsive', 'css/responsive.css', array('core'));
                $theme->asset()->usePath()->add('rs-plugin', 'rs-plugin/css/settings.css', array('core'));
                $theme->asset()->usePath()->add('showbizpro', 'showbizpro/css/settings.css', array('core'));
                $theme->asset()->usePath()->add('animate', 'css/animate.css', array('core'));
                $theme->asset()->usePath()->add('superfish', 'css/superfish.css', array('core'));
                $theme->asset()->usePath()->add('fancybox', 'css/fancybox/jquery.fancybox.css', array('core'));
                $theme->asset()->usePath()->add('fancybox-thumbs', 'css/fancybox/jquery.fancybox-thumbs.css', array('core'));
                $theme->asset()->usePath()->add('isotope', 'css/isotope.css', array('core'));
                $theme->asset()->usePath()->add('flexslider', 'css/flexslider.css', array('core'));

                $theme->asset()->container('footer')->usePath()->add('jquery', 'js/jquery.min.js');
                $theme->asset()->container('footer')->usePath()->add('jquery-ui', 'js/jquery-ui.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('excanvas', 'js/excanvas.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('themepunch', 'rs-plugin/js/jquery.themepunch.plugins.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('themepunch-revolution', 'rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('themepunch-plugins', 'showbizpro/js/jquery.themepunch.plugins.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('themepunch-showbizpro', 'showbizpro/js/jquery.themepunch.showbizpro.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('scroolto', 'js/scroolto.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('nicescroll', 'js/jquery.nicescroll.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('easy-pie-chart', 'js/jquery.easy-pie-chart.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('fancybox', 'js/fancybox/jquery.fancybox.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('fancybox-thumbs', 'js/fancybox/jquery.fancybox-thumbs.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('inview', 'js/jquery.inview.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('hoverIntent', 'js/menu/hoverIntent.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('superfish', 'js/menu/superfish.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('tinynav', 'js/menu/tinynav.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('twitterfeed', 'js/twitter/jquery.twitterfeed.min.js', array('jquery'));
                $theme->asset()->container('footer')->usePath()->add('settings', 'js/settings.js', array('jquery'));

            
            }

        )

    )

);