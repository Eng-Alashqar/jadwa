
<x-admin.master title="التعليقات">
    <x-page.title :route="route('admin.polls.index')" title="التعليقات" title_2="قائمة  التعليقات " />
    <x-page.table name='polls' cardtitle="تعليق">

        <x-slot name="th">
            <th>#</th>
            <th>الصورة</th>
            <th>الاسم</th>
            <th> المسمى الوظيفي</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($polls as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="5%">
                        <x-page.td-image :image="$i->image_name" />
                    </td>
                    <td width="70%">{{ $i->name_ar }}</td>

                    <td width="10%"><span class="tag tag-blue">{{ $i->institution_ar }}</span></td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="polls" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="polls" />
    @endpush
</x-admin.master>
