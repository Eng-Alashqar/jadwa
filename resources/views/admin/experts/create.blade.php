
<x-admin.master title=" إضافة خبير">
    <x-page.title :route="route('admin.experts.index')" title="الخبراء" title_2="اضافة خبير " />
    <form action="{{ route('admin.experts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة خبير  ">

            <x-form.input name="image" lable="صورة" type="file" />
            <div class="mb-4 main-content-label">الوصف</div>

            <x-form.input name="name_ar" lable="الاسم بالعربية" />
            <x-form.input name="name_en" lable="الاسم بالانجلزية" />
            <x-form.input name="jop_description_ar" lable="الوظيفة بالعربية" />
            <x-form.input name="jop_description_en" lable="الوظيفة بالاجنجليزية" />
            <div class="mb-4 main-content-label">بيانات التواصل</div>

            <x-form.input name="email" lable="الإيميل" type="email" />
            <x-form.input name="phone" lable="الهاتف" />
            <div class="mb-4 main-content-label">مواقع التواصل</div>

            <x-form.input name="twitter" lable="تويتر" type="url" />
            <x-form.input name="facebook" lable="فيس بوك" type="url" />
            <x-form.input name="skay" lable="سكاي" type="url" />
            <x-form.input name="linkedln" lable="لينكد ان" type="url" />
            <div class="mb-4 main-content-label"> معلومات إضافية</div>

            <x-form.textarea name="content_ar" lable="بيانات بالعربية" />
            <x-form.textarea name="content_en" lable="بيانات بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.experts.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>
  
</x-admin.master>
