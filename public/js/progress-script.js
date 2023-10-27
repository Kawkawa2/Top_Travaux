	// -------------------------------------------------------------
    // Progress Bar
    // -------------------------------------------------------------
 
    $('.progressOne').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'),function(){
                $(this).css('width', $(this).attr('aria-valuenow')+'%');
            });
            $(this).off('inview');
        }
    });