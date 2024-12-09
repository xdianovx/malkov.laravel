{{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.umd.js" crossorigin></script>
{{-- <script type="module">
    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{ route('admin.image_upload', ['_token' => csrf_token()]) }}",
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        view: 'p',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    }
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });
</script> --}}


<script type="module">
    const {
        ClassicEditor,
        AutoLink,
        Autosave,
        BalloonToolbar,
        BlockToolbar,
        Bold,
        Code,
        CodeBlock,
        Essentials,
        GeneralHtmlSupport,
        Heading,
        HtmlEmbed,
        Italic,
        Link,
        Paragraph,
        PasteFromOffice,
        ShowBlocks,
        SourceEditing,
        SpecialCharacters,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        TextPartLanguage,
        Title,
    } = window.CKEDITOR;

    /**
     * This is a 24-hour evaluation key. Create a free account to use CDN: https://portal.ckeditor.com/checkout?plan=free
     */
    const LICENSE_KEY =
        "eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NjUzMjQ3OTksImp0aSI6ImE4YTEzMzRiLTlmOGMtNDY3ZS05MjkzLTE1ZDNkYzlkZjhkYSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCIsIkJPWCJdLCJ2YyI6ImM0NGU4Y2UwIn0.g88fRjqJd926hwz09Dmr8FWKpAWOLIYXJqiR5ao-S8IpxYBrI26XiqVTvPpye2u1cO7_JJDRPvHdKHiwVBzxmA";

    const editorConfig = {
        toolbar: {
            items: [
                "sourceEditing",
                "showBlocks",
                "textPartLanguage",
                "|",
                "heading",
                "|",
                "bold",
                "italic",
                "code",
                "|",
                "specialCharacters",
                "link",
                "insertTable",
                "codeBlock",
                "htmlEmbed",
            ],
            shouldNotGroupWhenFull: true,
        },
        plugins: [
            AutoLink,
            Autosave,
            BalloonToolbar,
            BlockToolbar,
            Bold,
            Code,
            CodeBlock,
            Essentials,
            GeneralHtmlSupport,
            Heading,
            HtmlEmbed,
            Italic,
            Link,
            Paragraph,
            PasteFromOffice,
            ShowBlocks,
            SourceEditing,
            SpecialCharacters,
            Table,
            TableCaption,
            TableCellProperties,
            TableColumnResize,
            TableProperties,
            TableToolbar,
            TextPartLanguage,
            Title,
        ],
        balloonToolbar: ["bold", "italic", "|", "link"],
        blockToolbar: ["bold", "italic", "|", "link", "insertTable"],
        heading: {
            options: [{
                    model: "paragraph",
                    title: "Paragraph",
                    class: "ck-heading_paragraph",
                },

                {
                    model: "heading2",
                    view: "h2",
                    title: "Heading 2",
                    class: "ck-heading_heading2",
                },
                {
                    model: "heading3",
                    view: "h3",
                    title: "Heading 3",
                    class: "ck-heading_heading3",
                },
                {
                    model: "heading4",
                    view: "h4",
                    title: "Heading 4",
                    class: "ck-heading_heading4",
                },
                {
                    model: "heading5",
                    view: "h5",
                    title: "Heading 5",
                    class: "ck-heading_heading5",
                },
                {
                    model: "heading6",
                    view: "h6",
                    title: "Heading 6",
                    class: "ck-heading_heading6",
                },
            ],
        },
        htmlSupport: {
            allow: [{
                name: /^.*$/,
                styles: true,
                attributes: true,
                classes: true,
            }, ],
        },
        initialData: document.querySelector("#editor").dataset.content,
        licenseKey: LICENSE_KEY,
        link: {
            addTargetToExternalLinks: true,
            defaultProtocol: "https://",
            decorators: {
                toggleDownloadable: {
                    mode: "manual",
                    label: "Downloadable",
                    attributes: {
                        download: "file",
                    },
                },
            },
        },
        placeholder: "Type or paste your content here!",
        table: {
            contentToolbar: [
                "tableColumn",
                "tableRow",
                "mergeTableCells",
                "tableProperties",
                "tableCellProperties",
            ],
        },
    };

    ClassicEditor.create(document.querySelector("#editor"), editorConfig);
</script>
