<div class="col-sm-9 query-box">
    <div class="hotlist-div clearfix">
        @foreach($besthos as $hos)
            <div class="col-sm-3">
                <div class="thumbnail" style="margin-bottom: 0;">
                    <img src="{{asset('images/hoslist/1.jpg')}}" >
                    <div class="caption" style="overflow: hidden;word-wrap: break-word;text-align: center;">
                        <a href="/detail/index?hospital_id={{$hos['h_id']}}">{{$hos["name"]}}</a>
                        <p>好评:<span>{{$hos["zan"]}}</span></p>
                        <p>等级:<span>{{$hos["rank"]}}</span></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="doclist-div clearfix">
        @for($i = 0 ; $i < 4 ; $i++)
            <div class="col-sm-3">
                <div class="thumbnail" style="margin-bottom: 0;">
                    <img src="{{asset('images/hoslist/1.jpg')}}" >
                    <div class="caption" style="overflow: hidden;word-wrap: break-word;text-align: center;">
                        <a href="#">钟南山</a>
                        <p>主治医师</p>
                        <p>擅长领域:<span>肺炎</span></p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
<div class="note col-sm-3">
    <div style="text-indent: 10px">公告</div>
    <div class="hr"></div>
    <ul style="list-style: none;">
        @foreach($notice as $not)
            <li><a href="#">{{$not['title'].$not['content'].$not['time']}}</a></li>
        @endforeach
    </ul>
</div>


