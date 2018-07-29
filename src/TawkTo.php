<?php

namespace Emotality\TawkTo;

class TawkTo
{
    /**
     * Echo out the tawk.to widget script
     *
     * @return void
     */
    public function widgetCode()
    {
        // get api key from config file: /config/tawkto.php which pulls TAWKTO_API_KEY from .env file.
        $api_key = config('tawkto.api_key', 'no_api_key_set_in_env');

        // the widget code
        $script = '<script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src="https://embed.tawk.to/%s/default";s1.charset="UTF-8";s1.setAttribute("crossorigin","*");s0.parentNode.insertBefore(s1,s0);})();</script>';

        // echo merged string
        echo vsprintf($script, [$api_key]);
    }
}