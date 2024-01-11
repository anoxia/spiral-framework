<?php

declare(strict_types=1);

namespace Spiral\Framework;

enum ScopeName: string
{
    case Http = 'http';
    case HttpRequest = 'http.request';
    case Queue = 'queue';
    case QueueTask = 'queue.task';
    case Temporal = 'temporal';
    case TemporalActivity = 'temporal.activity';
    case Grpc = 'grpc';
    case GrpcRequest = 'grpc.request';
    case Centrifugo = 'centrifugo';
    case CentrifugoRequest = 'centrifugo.request';
    case Tcp = 'tcp';
    case TcpPacket = 'tcp.packet';
    case Console = 'console';
    case ConsoleCommand = 'console.command';
}
