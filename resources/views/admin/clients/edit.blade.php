
<x-admin.master title=" تعديل بيانات العميل">
    <x-page.title :route="route('admin.clients.index')" title="العملاء" title_2="تعديل بيانات العميل  " />
    <form action="{{ route('admin.clients.update',$client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <x-form.card card_lable="تعديل البيانات ">

            <x-form.input  name="image" lable="صورة" type="file" />

            <x-slot name="footer">
                <x-form.card-footer>
                    <x-form.button title="تعديل" />
                    <x-form.a :route="route('admin.clients.index')" title=" إلغاء " />
                </x-form.card-footer>
            </x-slot>

        </x-form.card>
    </form>

</x-admin.master>
