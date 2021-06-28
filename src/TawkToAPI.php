<?php

namespace Emotality\TawkTo;

class TawkToAPI
{
    /**
     * Echo out the tawk.to widget script
     *
     * @param string|null $link
     * @return void
     * @throws \Exception
     */
    public function widgetCode($link = null)
    {
        if (is_null($link)) {
            // get link from config file: /config/tawkto.php which pulls TAWKTO_link from .env file.
            $link = config('tawkto.link');
        }

        if (empty($link)) {
            throw new \Exception('Your TawkTo Direct Chat Link (TAWKTO_LINK) is not set in your .env file!');
        } else {
            $link = str_replace("https://tawk.to/chat/", null, $link);
            // the widget code
            $script = '<script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src="https://embed.tawk.to/%s";s1.charset="UTF-8";s1.setAttribute("crossorigin","*");s0.parentNode.insertBefore(s1,s0);})();</script>';

            // echo merged string
            echo sprintf($script, $link);
        }
    }
}
