@if(config('settings.googleanalyticsId'))
    {{-- Start of Tawk.to Script --}}
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=57b337d3-48b7-4b4c-acc3-274a1b4a5c62"> </script>
    <!-- End of  Zendesk Widget script -->
    <script>
        var $my = {
                livechat: {
                    window: {
                        show: function() {
                            $zopim.livechat.window.show();
                        }
                    }
                }
            };

    </script>
    {{-- End of Tawk.to Script --}}
@endif

