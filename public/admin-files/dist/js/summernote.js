    $(document).ready(function() {
        $('#summernote1').summernote({
            placeholder: 'write here...',
            height: 300,
            lineHeight: 0.2,
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0',
                '3.0'
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
                ['height', ['height']],

            ],

        });

        $('#summernote2').summernote({
            placeholder: 'write here...',
            height: 500,
            lineHeight: 0.2,
            fontSizeUnits: ['px', 'pt'],
            fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Times New Roman', 'Georgia'],
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0',
                '3.0'
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
                ['height', ['height']],

            ],

        });

    });