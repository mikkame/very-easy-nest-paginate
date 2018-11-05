<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

  
    </head>
    <body>
        <div>
            
            <table border='1'>
                <thead>
                    <tr>
                        <th>箱ID</th>
                        <th>箱名</th>
                        <th>商品ID</th>
                        <th>商品名</th>
                        
                    </tr>
                </thead>

                <!-- 親用のループを作成 -->
                @foreach($boxes as $box_id => $items)
                @php
                $box = \App\Box::find($box_id);   
                @endphp
                <!-- 親身だし作成 -->
                <tr>
                    <!-- 子の数+1にしておくと1行に混在せずに管理できるので便利 -->
                    <td  rowspan="{{count($items)+1}}">
                        B{{$box->id}}
                    </td>
                    <td rowspan="{{count($items)+1}}">
                        {{$box->name}}
                    </td>
                </tr>
                <!-- 子用のループを作成 -->
                @foreach($items as $item)
                <tr>
                    <td>I{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                </tr>
                @endforeach
                @endforeach
            </table>
            
        </div>
        {{$paginate_items->render()}}
    </body>
</html>
