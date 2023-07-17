<x-admin.master title="المدونة">
    <x-page.title :route="route('admin.blogs.index')" title="المدونة" title_2="قائمة  المدونة " />
    <x-page.table name='blogs' cardtitle="مدونة">

        <x-slot name="th">
            <th>#</th>
            <th>الصورة</th>
            <th>العنوان</th>
            <th> الكاتب</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($blogs as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="10%">
                        <x-page.td-image :image="$i->image_name" />
                    </td>
                    <td width="40%">{{ $i->title_ar }}  </td>
                    <td width="10%"><span class="tag tag-blue">{{ $i->auther }}</span></td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="blogs" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="blogs" />
    @endpush
</x-admin.master>
