
<x-admin.master title=" تعديل مهمة">
    <x-page.title :route="route('admin.tasks.index')" title="المهام" title_2="تعديل مهمة " />
    <form action="{{ route('admin.tasks.update',$task->id) }}" method="POST" >
        @csrf
        @method('put')

        <x-form.card card_lable="اضافة مهمة  ">

            <x-form.input name="name_ar" lable="الاسم بالعربية" :value="$task->name_ar"  />
            <x-form.input name="name_en" lable="الاسم بالانجليزية"  :value="$task->name_en" />
            <x-form.input name="price" lable="السعر" type="number" min=0 :value="$task->price" />
            <x-form.input name="time" lable="وقت المهمة"  :value="$task->time" />


            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.tasks.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
