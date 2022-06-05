<script>
    // Loading
    document.body.onload = function() {
        setTimeout(function() {
            $('.loading_section').fadeOut(1000);
        }, 1000);
    }

    // Filter profile
    function ajax_filter(click) {
        $.ajax({
            url: '/api/',
            method: 'get',
            dataType: 'json',
            data: {query: 'filter', profile: click},
            success: function(data) {
                $('.pro_text_info').empty();
                $('.pro_items').empty();
                $('.pro_text_info').append('<p class="prot_p">' + data['text_info'] + '</p>');
                var i = 0;
                for (i in data['profile']) {
                    $('.pro_items').append('<div class="pro_item"><div class="proi_div"><img class="proid_img" src="img/profile/' + data['profile'][i]['photo'] + '" alt="' + data['profile'][i]['photo'] + '"></div><div class="proi_text"><h3 class="proit_h3">' + data['profile'][i]['name'] + '</h3><p class="proit_p">' + data['profile'][i]['text'] + '</p></div></div>');
                    i++;
                }
            }
        });
    }

    // Services
    function ajax_services() {
        $.ajax({
            url: '/api/',
            method: 'get',
            dataType: 'json',
            data: {query: 'services'},
            success: function(data) {
                $('.services_page').empty();
                var i = 0;
                for (i in data['services']) {
                    $('.services_page').append('<div class="serp_item"><img class="serpi_img" src="/img/services/' + data['services'][i]['photo'] + '"><div class="serpi_info"><div class="serpi_text"><h2 class="serpit_h2">' + data['services'][i]['title'] + '</h2><p class="serpit_p">От ' + data['services'][i]['price'] + '₽ / ' + data['services'][i]['type'] + '</p><p class="serpit_p2">' + data['services'][i]['description'] + '</p></div><a class="serpi_a" href="#">Заказать услугу</a></div></div>');
                    i++;
                }
            }
        });
    } 

    ajax_filter('rehau');
    ajax_services();
</script>