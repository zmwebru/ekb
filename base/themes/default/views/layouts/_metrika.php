<?php
    $metrika = isset($this->yupeSettings['metrika']) ? $this->yupeSettings['metrika']['param_value'] : '';
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter<?=$metrika?> = new Ya.Metrika({
                    id:<?=$metrika?>,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/<?=$metrika?>" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
<!-- /Yandex.Metrika counter -->