
<x-admin.master title=" إضافة خبير">
    <x-page.title :route="route('admin.experts.index')" title="الخبراء" title_2="اضافة خبير " />
    <form action="{{ route('admin.experts.update',$expert->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل بيانات {{ $expert->name_ar }}  ">

            <x-form.input  name="image" lable="صورة" type="file" />
            <div class="mb-4 main-content-label">الوصف</div>

            <x-form.input :value="$expert->name_ar" name="name_ar" lable="الاسم بالعربية" />
            <x-form.input :value="$expert->name_en" name="name_en" lable="الاسم بالانجلزية" />
            <x-form.input :value="$expert->jop_description_ar" name="jop_description_ar" lable="الوظيفة بالعربية" />
            <x-form.input :value="$expert->jop_description_en" name="jop_description_en" lable="الوظيفة بالاجنجليزية" />
            <div class="mb-4 main-content-label">بيانات التواصل</div>

            <x-form.input :value="$expert->email" name="email" lable="الإيميل" type="email" />
            <x-form.input :value="$expert->phone" name="phone" lable="الهاتف" />
            <div class="mb-4 main-content-label">مواقع التواصل</div>

            <x-form.input :value="$expert->twitter" name="twitter" lable="تويتر" type="url" />
            <x-form.input :value="$expert->facebook" name="facebook" lable="فيس بوك" type="url" />
            <x-form.input :value="$expert->skay" name="skay" lable="سكاي" type="url" />
            <x-form.input :value="$expert->linkedln" name="linkedln" lable="لينكد ان" type="url" />
            <div class="mb-4 main-content-label"> معلومات إضافية</div>

            <x-form.textarea name="content_ar" :value="$expert->content_ar"  lable="بيانات بالعربية" />
            <x-form.textarea name="content_en"  :value="$expert->content_en" lable="بيانات بالانجليزية" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.experts.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
