<?php

namespace Emotality\TawkTo;

class TawkToAPI
{
    /**
     * Echo out the tawk.to widget script
     *
     * @param string|null $key
     * @return void
     * @throws \Exception
     */
    public function widgetCode($key = null)
    {
        if (is_null($key)) {
            // get key from config file: /config/tawkto.php which pulls TAWKTO_KEY from .env file.
            $key = config('tawkto.api_key');
        }

        if (empty($key)) {
            throw new \Exception('Your TawkTo API key (TAWKTO_KEY) is not set in your .env file!');

        } else {
            // the widget code
            $script = '<script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src="https://embed.tawk.to/%s/default";s1.charset="UTF-8";s1.setAttribute("crossorigin","*");s0.parentNode.insertBefore(s1,s0);})();</script>';

            // echo merged string
            echo sprintf($script, $key);
        }
    }
}
