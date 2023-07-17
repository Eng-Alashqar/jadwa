<x-admin.master title=" تعديل تعليق">
    <x-page.title :route="route('admin.polls.index')" title="التعليقات" title_2="تعديل تعليق " />
    <form action="{{ route('admin.polls.update', $poll->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل بيانات {{ $poll->name_ar }}  ">

            <x-form.input name="image_name" lable="صورة" type="file" />
            <x-form.input :value="$poll->name_ar" name="name_ar" lable="الاسم بالعربية" />
            <x-form.input :value="$poll->name_en" name="name_en" lable="الاسم بالانجلزية" />
            <x-form.input name="institution_ar" :value="$poll->institution_ar" lable="المسمى الوظيفي بالعربية" />
            <x-form.input name="institution_en" :value="$poll->institution_en" lable="المسمى الوظيفي بالانجلزية" />
            <div class="mb-4 main-content-label"> المحتوى </div>

            <x-form.textarea name="content_ar" :value="$poll->content_ar" lable="بيانات بالعربية" />
            <x-form.textarea name="content_en" :value="$poll->content_en" lable="بيانات بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.polls.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
