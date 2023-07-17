<x-admin.master title="الخبراء">
    <x-page.title :route="route('admin.experts.index')" title="الخبراء" title_2="قائمة  الخبراء " />
    <x-page.table name='experts' cardtitle="خبير">

        <x-slot name="th">
            <th>#</th>
            <th>الصورة</th>
            <th>الإسم</th>
            <th>المسمى الوظيفي</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($experts as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="10%">
                        <x-page.td-image :image="$i->image" />
                    </td>
                    <td width="40%">{{ $i->name_ar }}  </td>
                    <td width="10%"><span class="tag tag-blue">{{ $i->jop_description_ar }}</span></td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="experts" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="experts" />
    @endpush
</x-admin.master>
