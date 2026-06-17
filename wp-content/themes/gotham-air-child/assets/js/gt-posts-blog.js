(function ($) {
    "use strict";
    $(document).on('click', '.gt-load-more-posts', function (e) {
        e.preventDefault();
        const button = $(this);
        if (button.hasClass('loading')) {
            return;
        }
        const page = parseInt(button.attr('data-page'));
        const maxPages = parseInt(button.attr('data-max-pages'));
        if (page >= maxPages) {
            button.hide();
            return;
        }
        button.addClass('loading');
        button.prop('disabled', true);
        const originalText = button.text();
        button.text('Loading...');
        $.ajax({
            url: gtPostsBlog.ajaxurl,
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'gt_load_more_posts',
                nonce: gtPostsBlog.nonce,
                page: page,
                post_type: button.attr('data-post-type'),
                posts_per_page: button.attr('data-posts-per-page'),
                order: button.attr('data-order'),
                orderby: button.attr('data-orderby')
            },
            success: function (response) {
                if (response.success) {
                    const wrapperId = button.attr('data-widget-id');
                    $('#gt-posts-blog-' + wrapperId).append(
                        response.data.html
                    );
                    button.attr(
                        'data-page',
                        response.data.page
                    );
                    if (response.data.page >= maxPages) {
                        button.fadeOut(300);
                    }
                }
            },
            error: function () {
                console.error(
                    'GT Posts Blog AJAX Error'
                );
            },
            complete: function () {
                button.removeClass('loading');
                button.prop('disabled', false);
                button.text(originalText);
            }
        });
    });
})(jQuery);