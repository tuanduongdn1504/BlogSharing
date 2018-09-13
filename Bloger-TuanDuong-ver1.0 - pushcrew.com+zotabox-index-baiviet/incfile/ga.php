 <script>
 	/**
         * Creates a temporary global ga object and loads analytics.js.
         * Parameters o, a, and m are all used internally. They could have been
         * declared using 'var', instead they are declared as parameters to save
         * 4 bytes ('var ').
         *
         * @param {Window}        i The global context object.
         * @param {HTMLDocument}  s The DOM document object.
         * @param {string}        o Must be 'script'.
         * @param {string}        g Protocol relative URL of the analytics.js script.
         * @param {string}        r Global name of analytics object. Defaults to 'ga'.
         * @param {HTMLElement}   a Async script tag.
         * @param {HTMLElement}   m First script tag in document.
         
         */
        
        
  (function(i, s, o, g, r, a, m) {

            i['GoogleAnalyticsObject'] = r;
            i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},
           
                i[r].l=1*new Date();
			  a = s.createElement(o),m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        // Creates a default tracker with automatic cookie domain configuration.
        ga('create', 'UA-84646361-1', 'auto');
        // Sends a pageview hit from the tracker just created.
        ga('send', 'pageview');
        </script>
        
        <!-- End Google Analytics -->