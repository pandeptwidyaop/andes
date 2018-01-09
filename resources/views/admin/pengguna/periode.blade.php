@component('layouts.components.card',['class' => 'col-md-6','title' => 'Periode'])
    <div class="form-group">
      <label for="">Periode Baru</label>
      <input type="text" class="form-control typeahead" data-provide="typeahead" id="listPeriode">
    </div>
    <button type="button" class="btn btn-primary pull-right">Tambah</button>
@endcomponent
@push('script')
    <script src="{{url('vendor/typeahead/js.js')}}" charset="utf-8"></script>
@endpush
@push('js')
    <script type="text/javascript">
        $(function(){
            $('#listPeriode').typeahead({
                source: ["2015/2016","2016/2017","2017/2018"]
            });
        });
    </script>
@endpush
