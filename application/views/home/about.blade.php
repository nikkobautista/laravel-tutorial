@layout('layouts/main')

@section('navigation')
@parent
<li><a href="about">About</a></li>
@endsection

@section('content')
<div class="row">
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Navigation</li>
                @foreach ($sidenav as $sn)
                <li @if ($sn['active']) class="active" @endif>
                    <a href="{{ $sn['url'] }}">{{ $sn['name'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="span9">
        <h1>About Instapics</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ullamcorper lectus et sapien volutpat iaculis. Phasellus arcu justo, commodo ac ornare at, pellentesque vitae nulla. Sed id justo mauris, et semper est. Mauris id dui vitae felis hendrerit sollicitudin ut vel nisi. Phasellus a dolor quis tellus sagittis commodo. Suspendisse potenti. Donec sagittis rhoncus sem in venenatis. Nam sit amet leo metus. Mauris eget nisi eu felis interdum venenatis nec sed ipsum. Integer lobortis, risus non pellentesque pharetra, massa augue vulputate sem, quis sagittis arcu tortor sit amet nisi. Ut quis nibh sem. Morbi malesuada, lorem ac tincidunt venenatis, quam erat rhoncus sapien, et tempus quam mauris sit amet metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam varius dictum lectus non placerat.</p>
        <p>Cras tincidunt, libero eu dignissim egestas, erat purus mattis urna, vitae pellentesque nisi turpis at velit. Vivamus vitae euismod nisi. Duis luctus ante nec neque fermentum vulputate. Phasellus in dolor quis mauris rhoncus consectetur ut quis lacus. Nulla facilisi. Nullam magna velit, accumsan vehicula consectetur a, vestibulum eget neque. Sed feugiat dui quis ligula convallis sed placerat dui dignissim. Aliquam interdum tempus leo, a hendrerit orci ultrices ut. Aliquam sem dolor, auctor eu mattis id, varius a massa. Fusce facilisis, massa id ultricies lacinia, urna nunc sollicitudin massa, sit amet posuere metus justo vitae metus. Vivamus in dolor quam, ut elementum libero. Proin vehicula diam eu diam consectetur ut imperdiet ipsum pulvinar. Cras eu est quis urna semper adipiscing ut et leo. Curabitur tristique consectetur aliquet. Phasellus quam neque, dapibus non eleifend quis, feugiat vel elit.</p>
    </div>
</div>
@endsection