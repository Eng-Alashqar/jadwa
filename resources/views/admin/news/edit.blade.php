<x-admin.master title=" إضافة خبر">
    <x-page.title :route="route('admin.news.index')" title="الأخبار" title_2="اضافة خبر " />
    <form action="{{ route('admin.news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل بيانات {{ $news->title_ar }}  ">

            <x-form.input  name="image_name" lable="صورة" type="file" />
            <x-form.input :value="$news->title_ar" name="title_ar" lable="الاسم بالعربية" />
            <x-form.input :value="$news->title_en" name="title_en" lable="الاسم بالانجلزية" />
            <div class="mb-4 main-content-label"> المحتوى إضافية</div>

            <x-form.textarea name="content_ar" :value="$news->content_ar"  lable="بيانات بالعربية" />
            <x-form.textarea name="content_en"  :value="$news->content_en" lable="بيانات بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.news.index')" title=" إلغاء " />
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
