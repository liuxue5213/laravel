@extends('test.base')

@section('title')
测试
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
                  <th>手机号码</th>
                  <th>交易ID</th>
                  <th>创建时间</th>
                  <th>使用运营商通道</th>
                  <th>运营商订单ID</th>
                  <th>运营商通道ID</th>
                  <th>状态</th>
                  <th>状态码</th>
                  <th>状态描述</th>
                  <th>订单完成时间</th>
                  <th>该次订购对应的渠道列表</th>
                  <th>流量规格</th>
                </tr>
              </thead>
              <tbody>

              @foreach($data as $d)
                <tr>
                  <td>{{ $d->Mobile}}</td>
                  <td>{{ $d->TradeID}}</td>
                  <td>{{ $d->CreateTime}}</td>
                  <td>{{ $d->channelName}}</td>
                  <td>{{ $d->OrderID}}</td>
                  <td>{{ $d->channelId}}</td>
                  <td>

                  @if ( $d->Status == 0) 
                  提交运营商失败
                  @elseif ( $d->Status == 1)
                  提交运营商失败
                  @elseif ($d->Status == 2 )
                  订购成功
                  @else
                  订购失败
                  @endif
                 
                  </td>
                  <td>{{ $d->StatusCode}}</td>
                  <td>{{ $d->StatusDesc}}</td>
                  <td>{{ $d->FinishTime}}</td>
                  <td>{{ $d->ChannelIDs}}</td>
                  <td>{{ $d->Flow}}</td>
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