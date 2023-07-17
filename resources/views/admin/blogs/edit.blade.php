<x-admin.master title=" إضافة مدونة">
    <x-page.title :route="route('admin.blogs.index')" title="لبمدونة" title_2="اضافة مدونة " />
    <form action="{{ route('admin.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل بيانات {{ $blog->title_ar }}  ">

            <x-form.input  name="image_name" lable="صورة" type="file" />
            <x-form.input :value="$blog->title_ar" name="title_ar" lable="الاسم بالعربية" />
            <x-form.input :value="$blog->title_en" name="title_en" lable="الاسم بالانجلزية" />
            <div class="mb-4 main-content-label"> المحتوى إضافية</div>

            <x-form.textarea name="content_ar" :value="$blog->content_ar"  lable="محتوى بالعربية" />
            <x-form.textarea name="content_en"  :value="$blog->content_en" lable="محتوى بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.blogs.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"
            integrity="sha512-cJ2vUNryvHzgNJfmFTtZ2VX5EMT5JOU1i8nm+L1kwoHQ9bSqSYdswxyk++9Gi27p3BG2rXZXLMsTsluY4RZSSw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: [
                    'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                    'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                    'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
                    'wordcount'
                ],
                toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                    'alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
            });
        </script>
    @endpush
</x-admin.master>
