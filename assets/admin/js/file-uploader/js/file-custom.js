$(document).ready(function () {
    $('input[name="files"]').fileuploader({
        limit: 15,
        maxSize: 12,
        extensions: null,
        changeInput: ' ',
        theme: 'thumbnails',
        enableApi: true,
        addMore: true,
        thumbnails: {
            box: '<div class="fileuploader-items">' + '<ul class="fileuploader-items-list">' + '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' + '</ul>' + '</div>',
            item: '<li class="fileuploader-item">' + '<div class="fileuploader-item-inner">' + '<div class="type-holder">${extension}</div>' + '<div class="actions-holder">' + '<button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></button>' + '</div>' + '<div class="thumbnail-holder">' + '${image}' + '<span class="fileuploader-action-popup"></span>' + '</div>' + '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' + '<div class="progress-holder">${progressBar}</div>' + '</div>' + '</li>',
            item2: '<li class="fileuploader-item">' + '<div class="fileuploader-item-inner">' + '<div class="type-holder">${extension}</div>' + '<div class="actions-holder">' + '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i class="fileuploader-icon-download"></i></a>' + '<button type="button" class="fileuploader-action fileuploader-action-sort" title="${captions.sort}"><i class="fileuploader-icon-sort"></i></button>' + '<button type="button" class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i class="fileuploader-icon-remove"></i></button>' + '</div>' + '<div class="thumbnail-holder">' + '${image}' + '<span class="fileuploader-action-popup"></span>' + '</div>' + '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' + '<div class="progress-holder">${progressBar}</div>' + '</div>' + '</li>',
            startImageRenderer: false,
            canvasImage: false,
            _selectors: {
                list: '.fileuploader-items-list',
                item: '.fileuploader-item',
                start: '.fileuploader-action-start',
                retry: '.fileuploader-action-retry',
                remove: '.fileuploader-action-remove'
            },
            onItemShow: function (item, listEl, parentEl, newInputEl, inputEl) {
                var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                        api = $.fileuploader.getInstance(inputEl.get(0));
                plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();
                if (item.format == 'image') {
                    item.html.find('.fileuploader-item-icon').hide()
                }
            }
        },
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        afterRender: function (listEl, parentEl, newInputEl, inputEl) {
            var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                    api = $.fileuploader.getInstance(inputEl.get(0));
            plusInput.on('click', function () {
                api.open();
            });
            api.getOptions().dragDrop.container = plusInput;
        },
        upload: {
            url: $('input[name="files"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>')
                }, 400);
                var files_array = $('.file-saver').val();
                if (files_array !== "") {
                    files_array += "," + filename.filename;
                }
                else
                {
                    files_array = filename.filename;
                }
                $('.file-saver').val(files_array);
            },
            onError: function (item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        sorter: {
            selectorExclude: null,
            placeholder: null,
            scrollContainer: window,
            onSort: function (list, listEl, parentEl, newInputEl, inputEl) {
                var api = $.fileuploader.getInstance(inputEl.get(0)),
                        fileList = api.getFileList(),
                        _list = [];
                var files_array = "";
//                var val = $('.file-saver').val();
//                console.log(val.split(","));
//                var array = val.split(",");
//                console.log(fileList)
                $.each(fileList, function (i, item) {
                    _list.push({
                        name: item.name,
                        index: item.index
                    });
                    if (files_array !== "")
                    {
                        files_array += "," + item.name;
                    } else
                    {
                        files_array = item.name;
                    }
                });
                $(".file-saver").val(files_array);
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            $.post(inputEl[0].dataset.id, {
                file: list.name
            });
            var files_array = $('.file-saver').val();
            files_array.replace(list.name);
            $('.file-saver').val(files_array);
        }
    });
    $('input[name="files1"]').fileuploader({
        limit: 1,
        maxSize: 1000,
        extensions: null,
        enableApi: true,
        addMore: false,
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        upload: {
            url: $('input[name="files1"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>');
                }, 400);
                var attr_name = (item.input.attr("data-attr-name")) ? item.input.attr("data-attr-name") : 'file-saver';
                console.log(attr_name);
                $('.' + attr_name).val(filename.filename);
            },
            onError: function (data, item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            var attr_name = (inputEl.attr("data-attr-name")) ? inputEl.attr("data-attr-name") : 'file-saver';
            console.log($('.' + attr_name).val());
            $.post(inputEl[0].dataset.id, {
                file: $('.' + attr_name).val()
            });
            $('.' + attr_name).val("");
        }
    });
    $('input[name="files2"]').fileuploader({
        limit: 1,
        maxSize: 1000,
        extensions: null,
        enableApi: true,
        addMore: false,
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        upload: {
            url: $('input[name="files2"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>');
                }, 400);
                var attr_name = (item.input.attr("data-attr-name")) ? item.input.attr("data-attr-name") : 'file-saver';
                console.log(attr_name);
                $('.' + attr_name).val(filename.filename);
            },
            onError: function (data, item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            var attr_name = (inputEl.attr("data-attr-name")) ? inputEl.attr("data-attr-name") : 'file-saver';
            console.log($('.' + attr_name).val());
            $.post(inputEl[0].dataset.id, {
                file: $('.' + attr_name).val()
            });
            $('.' + attr_name).val("");
        }
    });
    $('input[name="files3"]').fileuploader({
        limit: 1,
        maxSize: 1000,
        extensions: null,
        enableApi: true,
        addMore: false,
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        upload: {
            url: $('input[name="files3"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>');
                }, 400);
                var attr_name = (item.input.attr("data-attr-name")) ? item.input.attr("data-attr-name") : 'file-saver';
                console.log(attr_name);
                $('.' + attr_name).val(filename.filename);
            },
            onError: function (data, item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            var attr_name = (inputEl.attr("data-attr-name")) ? inputEl.attr("data-attr-name") : 'file-saver';
            console.log($('.' + attr_name).val());
            $.post(inputEl[0].dataset.id, {
                file: $('.' + attr_name).val()
            });
            $('.' + attr_name).val("");
        }
    });
    $('input[name="files4"]').fileuploader({
        limit: 1,
        maxSize: 1000,
        extensions: null,
        enableApi: true,
        addMore: false,
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        upload: {
            url: $('input[name="files4"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>');
                }, 400);
                var attr_name = (item.input.attr("data-attr-name")) ? item.input.attr("data-attr-name") : 'file-saver';
                console.log(attr_name);
                $('.' + attr_name).val(filename.filename);
            },
            onError: function (data, item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            var attr_name = (inputEl.attr("data-attr-name")) ? inputEl.attr("data-attr-name") : 'file-saver';
            console.log($('.' + attr_name).val());
            $.post(inputEl[0].dataset.id, {
                file: $('.' + attr_name).val()
            });
            $('.' + attr_name).val("");
        }
    });
    $('input[name="files5"]').fileuploader({
        limit: 1,
        maxSize: 1000,
        extensions: null,
        enableApi: true,
        addMore: false,
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        upload: {
            url: $('input[name="files5"]').attr("data-url"),
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function (data, item) {
                var filename = JSON.parse(data);
                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-holder').hide();
                    item.renderThumbnail();
                    item.html.find('.fileuploader-action-popup, .fileuploader-item-image').show();
                    item.html.find('.fileuploader-action-remove').before('<button type="button" class="fileuploader-action fileuploader-action-sort" title="Sort"><i class="fileuploader-icon-sort"></i></button>');
                }, 400);
                var attr_name = (item.input.attr("data-attr-name")) ? item.input.attr("data-attr-name") : 'file-saver';
                console.log(attr_name);
                $('.' + attr_name).val(filename.filename);
            },
            onError: function (data, item) {
                alert('Failed to upload File!!!');
                $('.fileuploader-action-remove').trigger("click");
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-holder');
                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
                item.html.find('.fileuploader-action-popup, .fileuploader-item-image').hide();
            }
        },
        onRemove: function (list, listEl, parentEl, newInputEl, inputEl) {
            var attr_name = (inputEl.attr("data-attr-name")) ? inputEl.attr("data-attr-name") : 'file-saver';
            console.log($('.' + attr_name).val());
            $.post(inputEl[0].dataset.id, {
                file: $('.' + attr_name).val()
            });
            $('.' + attr_name).val("");
        }
    });
});