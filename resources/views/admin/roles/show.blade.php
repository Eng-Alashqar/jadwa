<x-admin.master title=" عرض الصلاحيات">
    <x-page.title :route="route('admin.roles.index')" title="الصلاحيات" title_2="عرض صلاحية " />
    <div class="card p-3">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الاسم:</strong>
                    {{ $role->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>المحددات:</strong>
                    @if (!empty($rolePermissions))
                        @foreach ($rolePermissions as $v)
                            <label class="label text-info">{{ $v->name }},</label>
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <a  class="btn btn-primary"  href="{{ route('admin.roles.index') }}" >رجوع</a>
    </div>
</div>
</div>
</div>

</x-admin.master>
