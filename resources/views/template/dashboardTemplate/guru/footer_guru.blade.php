</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.min.js"></script>

<!-- JS Libraies -->
<script src="{{ asset('/stisla/modules/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/stisla/js/page/modules-calendar.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/js/dataTables.select.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('/stisla/js/scripts.js') }}"></script>
<script src="{{ asset('/stisla/js/custom.js') }}"></script>
<script src="{{ asset('/stisla/js/stisla.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('/stisla/js/page/bootstrap-modal.js') }}"></script>
<script src="{{ asset('/stisla/js/page/modules-datatables.js') }}"></script>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor-container', {
        modules: {
            toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }]
            ]
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
        // Populate hidden form on submit
        var materi = document.querySelector('input[name=isi_materi]');
        materi.value = quill.root.innerHTML;
        return true;

    };
</script>



</body>

</html>