<?php

namespace Emotality\TawkTo;

class TawkToAPI
{
    /**
     * Echo out the tawk.to widget script
     *
     * @param  string|null  $link
     * @return void|string
     * @throws \Exception
     */
    public function widgetCode(string $link = null)
    {
        $link = $link ?? config('tawkto.link');

        if (empty($link)) {
            throw new \Exception('Your TawkTo "Direct Chat Link" (TAWKTO_LINK) can not be empty.');
        }

        echo self::script($link);
    }

    /**
     * Create TawkTo JavaScript code.
     *
     * @param  string  $link
     * @return string
     */
    private static function script(string $link) : string
    {
        $embed_link = str_replace('https://tawk.to/chat/', 'https://embed.tawk.to/', $link);

        $script = '<script type="text/javascript">var Tawk_API=Tawk_API || {}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src="%s"; s1.charset="UTF-8"; s1.setAttribute("crossorigin","*"); s0.parentNode.insertBefore(s1,s0); })();</script>';

        return sprintf($script, $embed_link);
    }
}
