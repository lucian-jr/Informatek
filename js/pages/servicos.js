$( document ).ready(function() {
    $('div.item-list').click(function() {
        id = $(this).data('id');        

        infoBoxDisplay = $(`div.info-box[data-id=${id}]`).css('display');     

        if(infoBoxDisplay == 'none'){
            $(`div.info-box[data-id=${id}]`).slideDown();

            $(`img.img-arrow[data-id=${id}]`).addClass('arrow-dowm');
            $(`img.img-arrow[data-id=${id}]`).removeClass('arrow-lay');

        } else {
            $(`div.info-box[data-id=${id}]`).slideUp();

            $(`img.img-arrow[data-id=${id}]`).addClass('arrow-lay');
            $(`img.img-arrow[data-id=${id}]`).removeClass('arrow-dowm');
        }
    });
});
