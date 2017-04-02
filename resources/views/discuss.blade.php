@extends("layouts.master")

@section("content")
<style>
    #header{
        box-sizing: border-box;
        color: #956295;
        text-decoration: none;
        font-family: 'Viga-Regular';
        font-size: 30px;
        font-weight: 500;
        line-height: 44px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        position: relative;
        text-align: center;

    }
</style>
<div class="container">
  <h2 id="header" class="row" style="margin-top:1em">Discuss about Kisanmitra</h2>
    <div class="row" style="margin-bottom:2em;margin-top:0;">
        <div class="disqus col-md-12  well" style="min-height:10em;">
            <div id="disqus_thread"></div>
            <script>

                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                 var disqus_config = function () {
                 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                 };
                 */
                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://kisanmitra.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
    </div>
</div>
<script id="dsq-count-scr" src="//kisanmitra.disqus.com/count.js" async></script>

@endsection