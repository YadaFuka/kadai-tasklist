@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2 class="prose-lg">タスク 一覧</h2>
    </div>

    @if (isset($tasks))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td><a class="link link-hover link-info" href="{{ route('tasks.show', $task->id) }}">{{ $task->id }}</a></td>
                    <td>{{ $task->status }}
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- メッセージ作成ページへのリンク --}}    {{-- 追加 --}}
    <a class="btn btn-neutral" href="{{ route('tasks.create') }}">新規タスク登録</a>    {{-- 追加 --}}


@endsection