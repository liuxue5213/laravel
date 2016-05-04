@extends('test.base')

@section('title')
订单信息查询
@endsection

@section('content')
  <div class="container-fluid">
      <div class="row">
        <div class=" main">
          <h1 class="page-header">订单查询</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>订购手机号码</th>
                  <th>创建时间</th>
                  <th>订单状态</th>
                  <th>状态码描述</th>
                  <th>流量规格</th>
                  <th>交易ID</th>
                  <th>渠道编号</th>
                  <th>订单完成时间</th>
                  <th>运营商订单ID</th>
                  <th>使用运营商通道</th>
                  <th>省份</th>
                </tr>
              </thead>
              <tbody>

              @foreach($data as $d)
                <tr>
                  <td>{{ $d->Mobile}}</td>
                  <td>{{ $d->CreateTime}}</td>
                  <td>{{ $d->Status}}</td>
                  <td>{{ $d->StatusDesc}}</td>
                  <td>{{ $d->productSize}}</td>
                  <td>{{ $d->TradeId}}</td>
                  <td>{{ $d->SellID}}</td>
                  <td>{{ $d->FinishTime}}</td>
                  <td>{{ $d->OrderID}}</td>
                  <td>{{ $d->channelName}}</td>
                  <td>{{ $d->provinceName}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
            
            <div style="text-align:center">
            <?php echo $data->render(); ?>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection    