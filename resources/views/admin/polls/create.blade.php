

<x-admin.master title=" إضافة تعليق">
    <x-page.title :route="route('admin.polls.index')" title="ألتعليقات" title_2="اضافة تعليق " />
    <form action="{{ route('admin.polls.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة تعليق  ">

            <x-form.input name="image_name" lable="صورة" type="file" />

            <x-form.input name="name_ar" lable="الإسم بالعربية" />
            <x-form.input name="name_en" lable="الإسم بالانجلزية" />
            <x-form.input name="institution_ar" lable="المسمى الوظيفي بالعربية" />
            <x-form.input name="institution_en" lable="المسمى الوظيفي بالانجلزية" />


            <div class="mb-4 main-content-label"> المحتوى للتعليق</div>

            <x-form.textarea name="content_ar" lable="المحتوى بالعربية" />
            <x-form.textarea name="content_en" lable="المحتوى بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.polls.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
