<?php


namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed id
 * @property mixed access
 */
class AccessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status_zakaz' => $this->status_zakaz,
            'orderid' => $this->orderid,
//            'kvadrat_id' => $this->kvadrat_id ? $this->kvadrat_id : "😎",
            'kvadrat_id' => $this->kvadrat_id ? $this->kvadrat_id : "+",
            'nameus' => $this->nameus,
//            'info' => $this->kvadrat_info ? $this->kvadrat_info->info : "🕸🕸🕸🕸🕸🕸🕸",
            'info' => $this->kvadrat_info ? $this->kvadrat_info->info : "",
            'adress' => $this->adress,
            'tel' => $this->tel,
            'status' => $this->status,
//            'racion' => $this->racion_id ? $this->racion_id->name : "",
            'racion' => $this->racion,
            'deliv' => $this->deliv,
            'total' => $this->total,
            'pay' => $this->pay,
            'start_edit' => $this->start_edit,
            'type_zakaz' => $this->type_zakaz,
            'datetimes' => Carbon::createFromDate($this->datetimes)->format('d.m.Y'),
            'datetimes_time' => Carbon::now()->format('H:i:s'),
            'use_time' => Carbon::createFromDate($this->use_time)->format('H:i:s'),
            'date_delivery' => $this->date_delivery ? Carbon::createFromDate($this->date_delivery)->format('d-m-Y') : '',
            'end_Date' => Carbon::createFromDate($this->end_Date)->format('d.m.Y'),
            'array' => json_decode($this->array, true, 100, 0),
            'end_array' => json_decode($this->end_array, true, 100, 0),
            "kurer" => $this->user ? $this->user->surname : 'Не задан',
        ];
    }
}
