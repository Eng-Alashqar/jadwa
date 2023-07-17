
<x-admin.master title=" إضافة عميل">
    <x-page.title :route="route('admin.clients.index')" title="الخبراء" title_2="اضافة عميل " />
    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.card card_lable="اضافة عميل  ">

            <x-form.input name="image_name" lable="صورة" type="file" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="إضافة" />
                    <x-form.a :route="route('admin.clients.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
