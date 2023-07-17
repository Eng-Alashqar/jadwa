
<x-admin.master title=" إضافة مهمة">
    <x-page.title :route="route('admin.tasks.index')" title="المهام" title_2="اضافة مهمة " />
    <form action="{{ route('admin.tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة مهمة  ">

            <x-form.input name="name_ar" lable="الاسم بالعربية"  />
            <x-form.input name="name_en" lable="الاسم بالانجليزية"  />
            <x-form.input name="price" lable="السعر" type="number" min=0 />
            <x-form.input name="time" lable="وقت المهمة"  />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.tasks.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
