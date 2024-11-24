<?php

namespace mhhex;

use think\response\Json;

class ApiResp
{
    // 状态码
    protected int $statusCode = 0;
    // 消息描述
    protected string $message = '';
    // 数据总条数
    protected int $total = 0;
    // 当前页码
    protected int $pageNum = 1;
    // 每页显示条数
    protected int $pageSize = 0;
    // 数据项
    protected array $item = [];

    /**
     * 设置状态码
     *
     * @param int $statusCode 状态码
     * @return $this
     */
    public function setStatusCode(int $statusCode): static
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * 设置消息描述
     *
     * @param string $message 消息描述
     * @return $this
     */
    public function setMessage(string $message): static
    {
        $this->message = $message;
        return $this;
    }

    /**
     * 设置数据总条数
     *
     * @param int $total 数据总条数
     * @return $this
     */
    public function setTotal(int $total): static
    {
        $this->total = $total;
        return $this;
    }

    /**
     * 设置当前页码
     *
     * @param int $pageNum 当前页码
     * @return $this
     */
    public function setPageNum(int $pageNum): static
    {
        $this->pageNum = $pageNum;
        return $this;
    }

    /**
     * 设置每页显示条数
     *
     * @param int $pageSize 每页显示条数
     * @return $this
     */
    public function setPageSize(int $pageSize): static
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 设置具体的数据项
     *
     * @param array $item 具体的数据项
     * @return $this
     */
    public function setItem(array $item): static
    {
        $this->item = $item;
        return $this;
    }

    /**
     * 获取对应状态码的默认消息描述
     *
     * @return string
     */
    protected function getDefaultMessage(): string
    {
        return config('apiresp.' . $this->statusCode, '未知状态码');
    }

    /**
     * 生成响应体
     *
     * @return Json
     */
    public function build(): Json
    {
        // 如果消息描述未设置，则获取默认消息描述
        if (!$this->message) {
            $this->message = $this->getDefaultMessage();
        }

        // 计算数据项的数量
        $count = count($this->item);

        // 如果数据总条数未设置，则使用数据项的数量作为总条数
        if (!$this->total) {
            $this->total = $count;
        }

        // 如果每页显示条数未设置，则使用数据项的数量作为每页显示条数
        if (!$this->pageSize) {
            $this->pageSize = $count;
        }

        // 构建响应数据数组
        $data = [
            'total' => $this->total, // 数据总条数
            'pageNum' => $this->pageNum, // 当前页码
            'pageSize' => $this->pageSize, // 每页显示条数
            'item' => $this->item, // 具体的数据项
        ];

        // 返回一个Json格式的响应体，包含状态码、消息描述、数据项数量和数据
        return json([
            'code' => $this->statusCode, // 状态码
            'msg' => $this->message, // 消息描述
            'count' => $count, // 数据项数量
            'data' => $data, // 数据数组
        ]);
    }
}