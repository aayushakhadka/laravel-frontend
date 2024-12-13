<div class=" flex flex-col max-h-[339px] max-w-[285px] bg-[#FFFFFF] rounded-3xl shadow-md">
<div class="flex px-4 py-3 items-center gap-4 ">
<span class="bg-[#FF4130] w-[11px] h-[11px] rounded-full"></span>
<h1 class="text-black text-lg font-bold  max-w-[12rem]">{{$item['heading']}}</h1>
</div>

                      <img class="h-[139px] w-[285px]" src="{{$item['img']}}" alt="service image"/>
                       
                      <div class="flex flex-col gap-2 p-4 ">
                        <p class="text-black text-lg text-left font-semibold">{{$item['description']}}</p>
                        <div class="flex gap-8">
                        <p class="text-gray-400 text-sm text-left">{{$item['date']}}</p>
                        <p class="text-gray-400 text-sm text-left">{{$item['time']}}</p>
</div>

                      </div>
                       
                      </div>