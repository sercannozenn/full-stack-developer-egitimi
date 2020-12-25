$(document).ready(function () {
    $('#btnSave').click(function () {
        let inputArray = [
            {
                id: '#title',
                alertTextAttr: 'Makale Başlığı',
                alertTitle: "Uyarı",
            },
            {
                id: '#category',
                alertTextAttr: 'Kategori',
                alertTitle: 'Uyarı',
            },
        ];

        $('#tagIds').val($('#tags').select2('val').toString());
        inputValidation(inputArray, 'postForm');
    });

    // Disable Toggle
    (function ($) {
        $.fn.toggleDisabled = function () {
            return this.each(function () {
                this.disabled = !this.disabled;
            });
        };
    })(jQuery);

    $('#publishNow').click(function () {
        $('#publish_date').toggleDisabled();
    })

    $('#tags').select2({
        ajax: {
            delay: 250,
            url: route,
            method: 'GET',
            dataType: 'json',
            data: function (params) {
                return {term: params.term};
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                var tagResponse = new Object();
                tagResponse.items = JSON.parse(JSON.stringify(data));
                return {
                    results: tagResponse.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        minimumInputLength: 3,
        placeholder: 'Etiket Ekle',
        templateResult: formatTag,
        templateSelection: formatTagSelection
    });

    function formatTag(tag) {
        if (tag.loading) {
            return tag.text;
        }

        var $tagContainer = $(`<span class='tag-name'>${tag.name}</span>`);
        return $tagContainer;
    }

    function formatTagSelection(tag) {
        return tag.name || tag.text;
    }
    CKEDITOR.replace('editor1');

    var d = new Date();
    const ye = new Intl.DateTimeFormat('tr', { year: 'numeric' }).format(d);
    const mo = new Intl.DateTimeFormat('tr', { month: 'numeric' }).format(d);
    const da = new Intl.DateTimeFormat('tr', { day: '2-digit' }).format(d);
    var today = `${ye}-${mo}-${da}`;
    today+= "T"+d.toString().substring(16,21);
    document.getElementById("publish_date").min = today;
    console.log(today);
});