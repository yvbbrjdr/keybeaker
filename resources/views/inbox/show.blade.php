@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    <button type="button" class="btn btn-default" onclick="javascript: location.href='{{ url('/inbox') }}'">
                                        &lt; Inbox
                                    </button>
                                </td>
                                <td style="text-align: right;">
                                    <form method="POST" style="margin: 0px;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-primary" onclick="javascript: location.href='{{ url('/sent/create?receiver='.urlencode($item->sender_key)) }}'">
                                            Reply
                                        </button>
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel-body">
                    {{ $item }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
