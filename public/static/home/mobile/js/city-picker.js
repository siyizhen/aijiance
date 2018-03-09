// jshint ignore: start
+function($){

$.rawCitiesData = [
  {
    "name": "北京",
    "code": 2,
    "sub": [
      {
        "name": "北京",
        "code": 52,
        "sub": [
          {
            "name": "东城区",
            "code": 500
          },
          {
            "name": "西城区",
            "code": 501
          },
          {
            "name": "海淀区",
            "code": 502
          },
          {
            "name": "朝阳区",
            "code": 503
          },
          {
            "name": "崇文区",
            "code": 504
          },
          {
            "name": "宣武区",
            "code": 505
          },
          {
            "name": "丰台区",
            "code": 506
          },
          {
            "name": "石景山区",
            "code": 507
          },
          {
            "name": "房山区",
            "code": 508
          },
          {
            "name": "门头沟区",
            "code": 509
          },
          {
            "name": "通州区",
            "code": 510
          },
          {
            "name": "顺义区",
            "code": 511
          },
          {
            "name": "昌平区",
            "code": 512
          },
          {
            "name": "怀柔区",
            "code": 513
          },
          {
            "name": "平谷区",
            "code": 514
          },
          {
            "name": "大兴区",
            "code": 515
          },
          {
            "name": "密云县",
            "code": 516
          },
          {
            "name": "延庆县",
            "code": 517
          }
        ]
      }
    ]
  },
  {
    "name": "安徽",
    "code": 3,
    "sub": [
      {
        "name": "安庆",
        "pid": 3,
        "code": 36,
        "sub": [
          {
            "name": "迎江区",
            "pid": 36,
            "code": 398
          },
          {
            "name": "大观区",
            "pid": 36,
            "code": 399
          },
          {
            "name": "宜秀区",
            "pid": 36,
            "code": 400
          },
          {
            "name": "桐城市",
            "pid": 36,
            "code": 401
          },
          {
            "name": "怀宁县",
            "pid": 36,
            "code": 402
          },
          {
            "name": "枞阳县",
            "pid": 36,
            "code": 403
          },
          {
            "name": "潜山县",
            "pid": 36,
            "code": 404
          },
          {
            "name": "太湖县",
            "pid": 36,
            "code": 405
          },
          {
            "name": "宿松县",
            "pid": 36,
            "code": 406
          },
          {
            "name": "望江县",
            "pid": 36,
            "code": 407
          },
          {
            "name": "岳西县",
            "pid": 36,
            "code": 408
          }
        ]
      },
      {
        "name": "蚌埠",
        "pid": 3,
        "code": 37,
        "sub": [
          {
            "name": "中市区",
            "pid": 37,
            "code": 409
          },
          {
            "name": "东市区",
            "pid": 37,
            "code": 410
          },
          {
            "name": "西市区",
            "pid": 37,
            "code": 411
          },
          {
            "name": "郊区",
            "pid": 37,
            "code": 412
          },
          {
            "name": "怀远县",
            "pid": 37,
            "code": 413
          },
          {
            "name": "五河县",
            "pid": 37,
            "code": 414
          },
          {
            "name": "固镇县",
            "pid": 37,
            "code": 415
          }
        ]
      },
      {
        "name": "巢湖",
        "pid": 3,
        "code": 38,
        "sub": [
          {
            "name": "居巢区",
            "pid": 38,
            "code": 416
          },
          {
            "name": "庐江县",
            "pid": 38,
            "code": 417
          },
          {
            "name": "无为县",
            "pid": 38,
            "code": 418
          },
          {
            "name": "含山县",
            "pid": 38,
            "code": 419
          },
          {
            "name": "和县",
            "pid": 38,
            "code": 420
          }
        ]
      },
      {
        "name": "池州",
        "pid": 3,
        "code": 39,
        "sub": [
          {
            "name": "贵池区",
            "pid": 39,
            "code": 421
          },
          {
            "name": "东至县",
            "pid": 39,
            "code": 422
          },
          {
            "name": "石台县",
            "pid": 39,
            "code": 423
          },
          {
            "name": "青阳县",
            "pid": 39,
            "code": 424
          }
        ]
      },
      {
        "name": "滁州",
        "pid": 3,
        "code": 40,
        "sub": [
          {
            "name": "琅琊区",
            "pid": 40,
            "code": 425
          },
          {
            "name": "南谯区",
            "pid": 40,
            "code": 426
          },
          {
            "name": "天长市",
            "pid": 40,
            "code": 427
          },
          {
            "name": "明光市",
            "pid": 40,
            "code": 428
          },
          {
            "name": "来安县",
            "pid": 40,
            "code": 429
          },
          {
            "name": "全椒县",
            "pid": 40,
            "code": 430
          },
          {
            "name": "定远县",
            "pid": 40,
            "code": 431
          },
          {
            "name": "凤阳县",
            "pid": 40,
            "code": 432
          }
        ]
      },
      {
        "name": "阜阳",
        "pid": 3,
        "code": 41,
        "sub": [
          {
            "name": "蚌山区",
            "pid": 41,
            "code": 433
          },
          {
            "name": "龙子湖区",
            "pid": 41,
            "code": 434
          },
          {
            "name": "禹会区",
            "pid": 41,
            "code": 435
          },
          {
            "name": "淮上区",
            "pid": 41,
            "code": 436
          },
          {
            "name": "颍州区",
            "pid": 41,
            "code": 437
          },
          {
            "name": "颍东区",
            "pid": 41,
            "code": 438
          },
          {
            "name": "颍泉区",
            "pid": 41,
            "code": 439
          },
          {
            "name": "界首市",
            "pid": 41,
            "code": 440
          },
          {
            "name": "临泉县",
            "pid": 41,
            "code": 441
          },
          {
            "name": "太和县",
            "pid": 41,
            "code": 442
          },
          {
            "name": "阜南县",
            "pid": 41,
            "code": 443
          },
          {
            "name": "颖上县",
            "pid": 41,
            "code": 444
          }
        ]
      },
      {
        "name": "淮北",
        "pid": 3,
        "code": 42,
        "sub": [
          {
            "name": "相山区",
            "pid": 42,
            "code": 445
          },
          {
            "name": "杜集区",
            "pid": 42,
            "code": 446
          },
          {
            "name": "烈山区",
            "pid": 42,
            "code": 447
          },
          {
            "name": "濉溪县",
            "pid": 42,
            "code": 448
          }
        ]
      },
      {
        "name": "淮南",
        "pid": 3,
        "code": 43,
        "sub": [
          {
            "name": "田家庵区",
            "pid": 43,
            "code": 449
          },
          {
            "name": "大通区",
            "pid": 43,
            "code": 450
          },
          {
            "name": "谢家集区",
            "pid": 43,
            "code": 451
          },
          {
            "name": "八公山区",
            "pid": 43,
            "code": 452
          },
          {
            "name": "潘集区",
            "pid": 43,
            "code": 453
          },
          {
            "name": "凤台县",
            "pid": 43,
            "code": 454
          }
        ]
      },
      {
        "name": "黄山",
        "pid": 3,
        "code": 44,
        "sub": [
          {
            "name": "屯溪区",
            "pid": 44,
            "code": 455
          },
          {
            "name": "黄山区",
            "pid": 44,
            "code": 456
          },
          {
            "name": "徽州区",
            "pid": 44,
            "code": 457
          },
          {
            "name": "歙县",
            "pid": 44,
            "code": 458
          },
          {
            "name": "休宁县",
            "pid": 44,
            "code": 459
          },
          {
            "name": "黟县",
            "pid": 44,
            "code": 460
          },
          {
            "name": "祁门县",
            "pid": 44,
            "code": 461
          }
        ]
      },
      {
        "name": "六安",
        "pid": 3,
        "code": 45,
        "sub": [
          {
            "name": "金安区",
            "pid": 45,
            "code": 462
          },
          {
            "name": "裕安区",
            "pid": 45,
            "code": 463
          },
          {
            "name": "寿县",
            "pid": 45,
            "code": 464
          },
          {
            "name": "霍邱县",
            "pid": 45,
            "code": 465
          },
          {
            "name": "舒城县",
            "pid": 45,
            "code": 466
          },
          {
            "name": "金寨县",
            "pid": 45,
            "code": 467
          },
          {
            "name": "霍山县",
            "pid": 45,
            "code": 468
          }
        ]
      },
      {
        "name": "马鞍山",
        "pid": 3,
        "code": 46,
        "sub": [
          {
            "name": "雨山区",
            "pid": 46,
            "code": 469
          },
          {
            "name": "花山区",
            "pid": 46,
            "code": 470
          },
          {
            "name": "金家庄区",
            "pid": 46,
            "code": 471
          },
          {
            "name": "当涂县",
            "pid": 46,
            "code": 472
          }
        ]
      },
      {
        "name": "宿州",
        "pid": 3,
        "code": 47,
        "sub": [
          {
            "name": "埇桥区",
            "pid": 47,
            "code": 473
          },
          {
            "name": "砀山县",
            "pid": 47,
            "code": 474
          },
          {
            "name": "萧县",
            "pid": 47,
            "code": 475
          },
          {
            "name": "灵璧县",
            "pid": 47,
            "code": 476
          },
          {
            "name": "泗县",
            "pid": 47,
            "code": 477
          }
        ]
      },
      {
        "name": "铜陵",
        "pid": 3,
        "code": 48,
        "sub": [
          {
            "name": "铜官山区",
            "pid": 48,
            "code": 478
          },
          {
            "name": "狮子山区",
            "pid": 48,
            "code": 479
          },
          {
            "name": "郊区",
            "pid": 48,
            "code": 480
          },
          {
            "name": "铜陵县",
            "pid": 48,
            "code": 481
          }
        ]
      },
      {
        "name": "芜湖",
        "pid": 3,
        "code": 49,
        "sub": [
          {
            "name": "镜湖区",
            "pid": 49,
            "code": 482
          },
          {
            "name": "弋江区",
            "pid": 49,
            "code": 483
          },
          {
            "name": "鸠江区",
            "pid": 49,
            "code": 484
          },
          {
            "name": "三山区",
            "pid": 49,
            "code": 485
          },
          {
            "name": "芜湖县",
            "pid": 49,
            "code": 486
          },
          {
            "name": "繁昌县",
            "pid": 49,
            "code": 487
          },
          {
            "name": "南陵县",
            "pid": 49,
            "code": 488
          }
        ]
      },
      {
        "name": "宣城",
        "pid": 3,
        "code": 50,
        "sub": [
          {
            "name": "宣州区",
            "pid": 50,
            "code": 489
          },
          {
            "name": "宁国市",
            "pid": 50,
            "code": 490
          },
          {
            "name": "郎溪县",
            "pid": 50,
            "code": 491
          },
          {
            "name": "广德县",
            "pid": 50,
            "code": 492
          },
          {
            "name": "泾县",
            "pid": 50,
            "code": 493
          },
          {
            "name": "绩溪县",
            "pid": 50,
            "code": 494
          },
          {
            "name": "旌德县",
            "pid": 50,
            "code": 495
          }
        ]
      },
      {
        "name": "亳州",
        "pid": 3,
        "code": 51,
        "sub": [
          {
            "name": "涡阳县",
            "pid": 51,
            "code": 496
          },
          {
            "name": "蒙城县",
            "pid": 51,
            "code": 497
          },
          {
            "name": "利辛县",
            "pid": 51,
            "code": 498
          },
          {
            "name": "谯城区",
            "pid": 51,
            "code": 499
          }
        ]
      },
      {
        "name": "合肥",
        "pid": 3,
        "code": 3401,
        "sub": [
          {
            "name": "庐阳区",
            "pid": 3401,
            "code": 3402
          },
          {
            "name": "瑶海区",
            "pid": 3401,
            "code": 3403
          },
          {
            "name": "蜀山区",
            "pid": 3401,
            "code": 3404
          },
          {
            "name": "包河区",
            "pid": 3401,
            "code": 3405
          },
          {
            "name": "长丰县",
            "pid": 3401,
            "code": 3406
          },
          {
            "name": "肥东县",
            "pid": 3401,
            "code": 3407
          },
          {
            "name": "肥西县",
            "pid": 3401,
            "code": 3408
          }
        ]
      }
    ]
  },
  {
    "name": "福建",
    "code": 4,
    "sub": [
      {
        "name": "福州",
        "pid": 4,
        "code": 53,
        "sub": [
          {
            "name": "鼓楼区",
            "pid": 53,
            "code": 518
          },
          {
            "name": "台江区",
            "pid": 53,
            "code": 519
          },
          {
            "name": "仓山区",
            "pid": 53,
            "code": 520
          },
          {
            "name": "马尾区",
            "pid": 53,
            "code": 521
          },
          {
            "name": "晋安区",
            "pid": 53,
            "code": 522
          },
          {
            "name": "福清市",
            "pid": 53,
            "code": 523
          },
          {
            "name": "长乐市",
            "pid": 53,
            "code": 524
          },
          {
            "name": "闽侯县",
            "pid": 53,
            "code": 525
          },
          {
            "name": "连江县",
            "pid": 53,
            "code": 526
          },
          {
            "name": "罗源县",
            "pid": 53,
            "code": 527
          },
          {
            "name": "闽清县",
            "pid": 53,
            "code": 528
          },
          {
            "name": "永泰县",
            "pid": 53,
            "code": 529
          },
          {
            "name": "平潭县",
            "pid": 53,
            "code": 530
          }
        ]
      },
      {
        "name": "龙岩",
        "pid": 4,
        "code": 54,
        "sub": [
          {
            "name": "新罗区",
            "pid": 54,
            "code": 531
          },
          {
            "name": "漳平市",
            "pid": 54,
            "code": 532
          },
          {
            "name": "长汀县",
            "pid": 54,
            "code": 533
          },
          {
            "name": "永定县",
            "pid": 54,
            "code": 534
          },
          {
            "name": "上杭县",
            "pid": 54,
            "code": 535
          },
          {
            "name": "武平县",
            "pid": 54,
            "code": 536
          },
          {
            "name": "连城县",
            "pid": 54,
            "code": 537
          }
        ]
      },
      {
        "name": "南平",
        "pid": 4,
        "code": 55,
        "sub": [
          {
            "name": "延平区",
            "pid": 55,
            "code": 538
          },
          {
            "name": "邵武市",
            "pid": 55,
            "code": 539
          },
          {
            "name": "武夷山市",
            "pid": 55,
            "code": 540
          },
          {
            "name": "建瓯市",
            "pid": 55,
            "code": 541
          },
          {
            "name": "建阳市",
            "pid": 55,
            "code": 542
          },
          {
            "name": "顺昌县",
            "pid": 55,
            "code": 543
          },
          {
            "name": "浦城县",
            "pid": 55,
            "code": 544
          },
          {
            "name": "光泽县",
            "pid": 55,
            "code": 545
          },
          {
            "name": "松溪县",
            "pid": 55,
            "code": 546
          },
          {
            "name": "政和县",
            "pid": 55,
            "code": 547
          }
        ]
      },
      {
        "name": "宁德",
        "pid": 4,
        "code": 56,
        "sub": [
          {
            "name": "蕉城区",
            "pid": 56,
            "code": 548
          },
          {
            "name": "福安市",
            "pid": 56,
            "code": 549
          },
          {
            "name": "福鼎市",
            "pid": 56,
            "code": 550
          },
          {
            "name": "霞浦县",
            "pid": 56,
            "code": 551
          },
          {
            "name": "古田县",
            "pid": 56,
            "code": 552
          },
          {
            "name": "屏南县",
            "pid": 56,
            "code": 553
          },
          {
            "name": "寿宁县",
            "pid": 56,
            "code": 554
          },
          {
            "name": "周宁县",
            "pid": 56,
            "code": 555
          },
          {
            "name": "柘荣县",
            "pid": 56,
            "code": 556
          }
        ]
      },
      {
        "name": "莆田",
        "pid": 4,
        "code": 57,
        "sub": [
          {
            "name": "城厢区",
            "pid": 57,
            "code": 557
          },
          {
            "name": "涵江区",
            "pid": 57,
            "code": 558
          },
          {
            "name": "荔城区",
            "pid": 57,
            "code": 559
          },
          {
            "name": "秀屿区",
            "pid": 57,
            "code": 560
          },
          {
            "name": "仙游县",
            "pid": 57,
            "code": 561
          }
        ]
      },
      {
        "name": "泉州",
        "pid": 4,
        "code": 58,
        "sub": [
          {
            "name": "鲤城区",
            "pid": 58,
            "code": 562
          },
          {
            "name": "丰泽区",
            "pid": 58,
            "code": 563
          },
          {
            "name": "洛江区",
            "pid": 58,
            "code": 564
          },
          {
            "name": "清濛开发区",
            "pid": 58,
            "code": 565
          },
          {
            "name": "泉港区",
            "pid": 58,
            "code": 566
          },
          {
            "name": "石狮市",
            "pid": 58,
            "code": 567
          },
          {
            "name": "晋江市",
            "pid": 58,
            "code": 568
          },
          {
            "name": "南安市",
            "pid": 58,
            "code": 569
          },
          {
            "name": "惠安县",
            "pid": 58,
            "code": 570
          },
          {
            "name": "安溪县",
            "pid": 58,
            "code": 571
          },
          {
            "name": "永春县",
            "pid": 58,
            "code": 572
          },
          {
            "name": "德化县",
            "pid": 58,
            "code": 573
          },
          {
            "name": "金门县",
            "pid": 58,
            "code": 574
          }
        ]
      },
      {
        "name": "三明",
        "pid": 4,
        "code": 59,
        "sub": [
          {
            "name": "梅列区",
            "pid": 59,
            "code": 575
          },
          {
            "name": "三元区",
            "pid": 59,
            "code": 576
          },
          {
            "name": "永安市",
            "pid": 59,
            "code": 577
          },
          {
            "name": "明溪县",
            "pid": 59,
            "code": 578
          },
          {
            "name": "清流县",
            "pid": 59,
            "code": 579
          },
          {
            "name": "宁化县",
            "pid": 59,
            "code": 580
          },
          {
            "name": "大田县",
            "pid": 59,
            "code": 581
          },
          {
            "name": "尤溪县",
            "pid": 59,
            "code": 582
          },
          {
            "name": "沙县",
            "pid": 59,
            "code": 583
          },
          {
            "name": "将乐县",
            "pid": 59,
            "code": 584
          },
          {
            "name": "泰宁县",
            "pid": 59,
            "code": 585
          },
          {
            "name": "建宁县",
            "pid": 59,
            "code": 586
          }
        ]
      },
      {
        "name": "厦门",
        "pid": 4,
        "code": 60,
        "sub": [
          {
            "name": "思明区",
            "pid": 60,
            "code": 587
          },
          {
            "name": "海沧区",
            "pid": 60,
            "code": 588
          },
          {
            "name": "湖里区",
            "pid": 60,
            "code": 589
          },
          {
            "name": "集美区",
            "pid": 60,
            "code": 590
          },
          {
            "name": "同安区",
            "pid": 60,
            "code": 591
          },
          {
            "name": "翔安区",
            "pid": 60,
            "code": 592
          }
        ]
      },
      {
        "name": "漳州",
        "pid": 4,
        "code": 61,
        "sub": [
          {
            "name": "芗城区",
            "pid": 61,
            "code": 593
          },
          {
            "name": "龙文区",
            "pid": 61,
            "code": 594
          },
          {
            "name": "龙海市",
            "pid": 61,
            "code": 595
          },
          {
            "name": "云霄县",
            "pid": 61,
            "code": 596
          },
          {
            "name": "漳浦县",
            "pid": 61,
            "code": 597
          },
          {
            "name": "诏安县",
            "pid": 61,
            "code": 598
          },
          {
            "name": "长泰县",
            "pid": 61,
            "code": 599
          },
          {
            "name": "东山县",
            "pid": 61,
            "code": 600
          },
          {
            "name": "南靖县",
            "pid": 61,
            "code": 601
          },
          {
            "name": "平和县",
            "pid": 61,
            "code": 602
          },
          {
            "name": "华安县",
            "pid": 61,
            "code": 603
          }
        ]
      }
    ]
  },
  {
    "name": "甘肃",
    "code": 5,
    "sub": [
      {
        "name": "兰州",
        "pid": 5,
        "code": 62,
        "sub": [
          {
            "name": "皋兰县",
            "pid": 62,
            "code": 604
          },
          {
            "name": "城关区",
            "pid": 62,
            "code": 605
          },
          {
            "name": "七里河区",
            "pid": 62,
            "code": 606
          },
          {
            "name": "西固区",
            "pid": 62,
            "code": 607
          },
          {
            "name": "安宁区",
            "pid": 62,
            "code": 608
          },
          {
            "name": "红古区",
            "pid": 62,
            "code": 609
          },
          {
            "name": "永登县",
            "pid": 62,
            "code": 610
          },
          {
            "name": "榆中县",
            "pid": 62,
            "code": 611
          }
        ]
      },
      {
        "name": "白银",
        "pid": 5,
        "code": 63,
        "sub": [
          {
            "name": "白银区",
            "pid": 63,
            "code": 612
          },
          {
            "name": "平川区",
            "pid": 63,
            "code": 613
          },
          {
            "name": "会宁县",
            "pid": 63,
            "code": 614
          },
          {
            "name": "景泰县",
            "pid": 63,
            "code": 615
          },
          {
            "name": "靖远县",
            "pid": 63,
            "code": 616
          }
        ]
      },
      {
        "name": "定西",
        "pid": 5,
        "code": 64,
        "sub": [
          {
            "name": "临洮县",
            "pid": 64,
            "code": 617
          },
          {
            "name": "陇西县",
            "pid": 64,
            "code": 618
          },
          {
            "name": "通渭县",
            "pid": 64,
            "code": 619
          },
          {
            "name": "渭源县",
            "pid": 64,
            "code": 620
          },
          {
            "name": "漳县",
            "pid": 64,
            "code": 621
          },
          {
            "name": "岷县",
            "pid": 64,
            "code": 622
          },
          {
            "name": "安定区",
            "pid": 64,
            "code": 623
          },
          {
            "name": "安定区",
            "pid": 64,
            "code": 624
          }
        ]
      },
      {
        "name": "甘南",
        "pid": 5,
        "code": 65,
        "sub": [
          {
            "name": "合作市",
            "pid": 65,
            "code": 625
          },
          {
            "name": "临潭县",
            "pid": 65,
            "code": 626
          },
          {
            "name": "卓尼县",
            "pid": 65,
            "code": 627
          },
          {
            "name": "舟曲县",
            "pid": 65,
            "code": 628
          },
          {
            "name": "迭部县",
            "pid": 65,
            "code": 629
          },
          {
            "name": "玛曲县",
            "pid": 65,
            "code": 630
          },
          {
            "name": "碌曲县",
            "pid": 65,
            "code": 631
          },
          {
            "name": "夏河县",
            "pid": 65,
            "code": 632
          }
        ]
      },
      {
        "name": "嘉峪关",
        "pid": 5,
        "code": 66,
        "sub": [
          {
            "name": "嘉峪关市",
            "pid": 66,
            "code": 633
          }
        ]
      },
      {
        "name": "金昌",
        "pid": 5,
        "code": 67,
        "sub": [
          {
            "name": "金川区",
            "pid": 67,
            "code": 634
          },
          {
            "name": "永昌县",
            "pid": 67,
            "code": 635
          }
        ]
      },
      {
        "name": "酒泉",
        "pid": 5,
        "code": 68,
        "sub": [
          {
            "name": "肃州区",
            "pid": 68,
            "code": 636
          },
          {
            "name": "玉门市",
            "pid": 68,
            "code": 637
          },
          {
            "name": "敦煌市",
            "pid": 68,
            "code": 638
          },
          {
            "name": "金塔县",
            "pid": 68,
            "code": 639
          },
          {
            "name": "瓜州县",
            "pid": 68,
            "code": 640
          },
          {
            "name": "肃北",
            "pid": 68,
            "code": 641
          },
          {
            "name": "阿克塞",
            "pid": 68,
            "code": 642
          }
        ]
      },
      {
        "name": "临夏",
        "pid": 5,
        "code": 69,
        "sub": [
          {
            "name": "临夏市",
            "pid": 69,
            "code": 643
          },
          {
            "name": "临夏县",
            "pid": 69,
            "code": 644
          },
          {
            "name": "康乐县",
            "pid": 69,
            "code": 645
          },
          {
            "name": "永靖县",
            "pid": 69,
            "code": 646
          },
          {
            "name": "广河县",
            "pid": 69,
            "code": 647
          },
          {
            "name": "和政县",
            "pid": 69,
            "code": 648
          },
          {
            "name": "东乡族自治县",
            "pid": 69,
            "code": 649
          },
          {
            "name": "积石山",
            "pid": 69,
            "code": 650
          }
        ]
      },
      {
        "name": "陇南",
        "pid": 5,
        "code": 70,
        "sub": [
          {
            "name": "成县",
            "pid": 70,
            "code": 651
          },
          {
            "name": "徽县",
            "pid": 70,
            "code": 652
          },
          {
            "name": "康县",
            "pid": 70,
            "code": 653
          },
          {
            "name": "礼县",
            "pid": 70,
            "code": 654
          },
          {
            "name": "两当县",
            "pid": 70,
            "code": 655
          },
          {
            "name": "文县",
            "pid": 70,
            "code": 656
          },
          {
            "name": "西和县",
            "pid": 70,
            "code": 657
          },
          {
            "name": "宕昌县",
            "pid": 70,
            "code": 658
          },
          {
            "name": "武都区",
            "pid": 70,
            "code": 659
          }
        ]
      },
      {
        "name": "平凉",
        "pid": 5,
        "code": 71,
        "sub": [
          {
            "name": "崇信县",
            "pid": 71,
            "code": 660
          },
          {
            "name": "华亭县",
            "pid": 71,
            "code": 661
          },
          {
            "name": "静宁县",
            "pid": 71,
            "code": 662
          },
          {
            "name": "灵台县",
            "pid": 71,
            "code": 663
          },
          {
            "name": "崆峒区",
            "pid": 71,
            "code": 664
          },
          {
            "name": "庄浪县",
            "pid": 71,
            "code": 665
          },
          {
            "name": "泾川县",
            "pid": 71,
            "code": 666
          }
        ]
      },
      {
        "name": "庆阳",
        "pid": 5,
        "code": 72,
        "sub": [
          {
            "name": "合水县",
            "pid": 72,
            "code": 667
          },
          {
            "name": "华池县",
            "pid": 72,
            "code": 668
          },
          {
            "name": "环县",
            "pid": 72,
            "code": 669
          },
          {
            "name": "宁县",
            "pid": 72,
            "code": 670
          },
          {
            "name": "庆城县",
            "pid": 72,
            "code": 671
          },
          {
            "name": "西峰区",
            "pid": 72,
            "code": 672
          },
          {
            "name": "镇原县",
            "pid": 72,
            "code": 673
          },
          {
            "name": "正宁县",
            "pid": 72,
            "code": 674
          }
        ]
      },
      {
        "name": "天水",
        "pid": 5,
        "code": 73,
        "sub": [
          {
            "name": "甘谷县",
            "pid": 73,
            "code": 675
          },
          {
            "name": "秦安县",
            "pid": 73,
            "code": 676
          },
          {
            "name": "清水县",
            "pid": 73,
            "code": 677
          },
          {
            "name": "秦州区",
            "pid": 73,
            "code": 678
          },
          {
            "name": "麦积区",
            "pid": 73,
            "code": 679
          },
          {
            "name": "武山县",
            "pid": 73,
            "code": 680
          },
          {
            "name": "张家川",
            "pid": 73,
            "code": 681
          }
        ]
      },
      {
        "name": "武威",
        "pid": 5,
        "code": 74,
        "sub": [
          {
            "name": "古浪县",
            "pid": 74,
            "code": 682
          },
          {
            "name": "民勤县",
            "pid": 74,
            "code": 683
          },
          {
            "name": "天祝",
            "pid": 74,
            "code": 684
          },
          {
            "name": "凉州区",
            "pid": 74,
            "code": 685
          }
        ]
      },
      {
        "name": "张掖",
        "pid": 5,
        "code": 75,
        "sub": [
          {
            "name": "高台县",
            "pid": 75,
            "code": 686
          },
          {
            "name": "临泽县",
            "pid": 75,
            "code": 687
          },
          {
            "name": "民乐县",
            "pid": 75,
            "code": 688
          },
          {
            "name": "山丹县",
            "pid": 75,
            "code": 689
          },
          {
            "name": "肃南",
            "pid": 75,
            "code": 690
          },
          {
            "name": "甘州区",
            "pid": 75,
            "code": 691
          }
        ]
      }
    ]
  },
  {
    "name": "广东",
    "code": 6,
    "sub": [
      {
        "name": "广州",
        "pid": 6,
        "code": 76,
        "sub": [
          {
            "name": "从化市",
            "pid": 76,
            "code": 692
          },
          {
            "name": "天河区",
            "pid": 76,
            "code": 693
          },
          {
            "name": "东山区",
            "pid": 76,
            "code": 694
          },
          {
            "name": "白云区",
            "pid": 76,
            "code": 695
          },
          {
            "name": "海珠区",
            "pid": 76,
            "code": 696
          },
          {
            "name": "荔湾区",
            "pid": 76,
            "code": 697
          },
          {
            "name": "越秀区",
            "pid": 76,
            "code": 698
          },
          {
            "name": "黄埔区",
            "pid": 76,
            "code": 699
          },
          {
            "name": "番禺区",
            "pid": 76,
            "code": 700
          },
          {
            "name": "花都区",
            "pid": 76,
            "code": 701
          },
          {
            "name": "增城区",
            "pid": 76,
            "code": 702
          },
          {
            "name": "从化区",
            "pid": 76,
            "code": 703
          },
          {
            "name": "市郊",
            "pid": 76,
            "code": 704
          }
        ]
      },
      {
        "name": "深圳",
        "pid": 6,
        "code": 77,
        "sub": [
          {
            "name": "福田区",
            "pid": 77,
            "code": 705
          },
          {
            "name": "罗湖区",
            "pid": 77,
            "code": 706
          },
          {
            "name": "南山区",
            "pid": 77,
            "code": 707
          },
          {
            "name": "宝安区",
            "pid": 77,
            "code": 708
          },
          {
            "name": "龙岗区",
            "pid": 77,
            "code": 709
          },
          {
            "name": "盐田区",
            "pid": 77,
            "code": 710
          }
        ]
      },
      {
        "name": "潮州",
        "pid": 6,
        "code": 78,
        "sub": [
          {
            "name": "湘桥区",
            "pid": 78,
            "code": 711
          },
          {
            "name": "潮安县",
            "pid": 78,
            "code": 712
          },
          {
            "name": "饶平县",
            "pid": 78,
            "code": 713
          }
        ]
      },
      {
        "name": "东莞",
        "pid": 6,
        "code": 79,
        "sub": [
          {
            "name": "南城区",
            "pid": 79,
            "code": 714
          },
          {
            "name": "东城区",
            "pid": 79,
            "code": 715
          },
          {
            "name": "万江区",
            "pid": 79,
            "code": 716
          },
          {
            "name": "莞城区",
            "pid": 79,
            "code": 717
          },
          {
            "name": "石龙镇",
            "pid": 79,
            "code": 718
          },
          {
            "name": "虎门镇",
            "pid": 79,
            "code": 719
          },
          {
            "name": "麻涌镇",
            "pid": 79,
            "code": 720
          },
          {
            "name": "道滘镇",
            "pid": 79,
            "code": 721
          },
          {
            "name": "石碣镇",
            "pid": 79,
            "code": 722
          },
          {
            "name": "沙田镇",
            "pid": 79,
            "code": 723
          },
          {
            "name": "望牛墩镇",
            "pid": 79,
            "code": 724
          },
          {
            "name": "洪梅镇",
            "pid": 79,
            "code": 725
          },
          {
            "name": "茶山镇",
            "pid": 79,
            "code": 726
          },
          {
            "name": "寮步镇",
            "pid": 79,
            "code": 727
          },
          {
            "name": "大岭山镇",
            "pid": 79,
            "code": 728
          },
          {
            "name": "大朗镇",
            "pid": 79,
            "code": 729
          },
          {
            "name": "黄江镇",
            "pid": 79,
            "code": 730
          },
          {
            "name": "樟木头",
            "pid": 79,
            "code": 731
          },
          {
            "name": "凤岗镇",
            "pid": 79,
            "code": 732
          },
          {
            "name": "塘厦镇",
            "pid": 79,
            "code": 733
          },
          {
            "name": "谢岗镇",
            "pid": 79,
            "code": 734
          },
          {
            "name": "厚街镇",
            "pid": 79,
            "code": 735
          },
          {
            "name": "清溪镇",
            "pid": 79,
            "code": 736
          },
          {
            "name": "常平镇",
            "pid": 79,
            "code": 737
          },
          {
            "name": "桥头镇",
            "pid": 79,
            "code": 738
          },
          {
            "name": "横沥镇",
            "pid": 79,
            "code": 739
          },
          {
            "name": "东坑镇",
            "pid": 79,
            "code": 740
          },
          {
            "name": "企石镇",
            "pid": 79,
            "code": 741
          },
          {
            "name": "石排镇",
            "pid": 79,
            "code": 742
          },
          {
            "name": "长安镇",
            "pid": 79,
            "code": 743
          },
          {
            "name": "中堂镇",
            "pid": 79,
            "code": 744
          },
          {
            "name": "高埗镇",
            "pid": 79,
            "code": 745
          }
        ]
      },
      {
        "name": "佛山",
        "pid": 6,
        "code": 80,
        "sub": [
          {
            "name": "禅城区",
            "pid": 80,
            "code": 746
          },
          {
            "name": "南海区",
            "pid": 80,
            "code": 747
          },
          {
            "name": "顺德区",
            "pid": 80,
            "code": 748
          },
          {
            "name": "三水区",
            "pid": 80,
            "code": 749
          },
          {
            "name": "高明区",
            "pid": 80,
            "code": 750
          }
        ]
      },
      {
        "name": "河源",
        "pid": 6,
        "code": 81,
        "sub": [
          {
            "name": "东源县",
            "pid": 81,
            "code": 751
          },
          {
            "name": "和平县",
            "pid": 81,
            "code": 752
          },
          {
            "name": "源城区",
            "pid": 81,
            "code": 753
          },
          {
            "name": "连平县",
            "pid": 81,
            "code": 754
          },
          {
            "name": "龙川县",
            "pid": 81,
            "code": 755
          },
          {
            "name": "紫金县",
            "pid": 81,
            "code": 756
          }
        ]
      },
      {
        "name": "惠州",
        "pid": 6,
        "code": 82,
        "sub": [
          {
            "name": "惠阳区",
            "pid": 82,
            "code": 757
          },
          {
            "name": "惠城区",
            "pid": 82,
            "code": 758
          },
          {
            "name": "大亚湾",
            "pid": 82,
            "code": 759
          },
          {
            "name": "博罗县",
            "pid": 82,
            "code": 760
          },
          {
            "name": "惠东县",
            "pid": 82,
            "code": 761
          },
          {
            "name": "龙门县",
            "pid": 82,
            "code": 762
          }
        ]
      },
      {
        "name": "江门",
        "pid": 6,
        "code": 83,
        "sub": [
          {
            "name": "江海区",
            "pid": 83,
            "code": 763
          },
          {
            "name": "蓬江区",
            "pid": 83,
            "code": 764
          },
          {
            "name": "新会区",
            "pid": 83,
            "code": 765
          },
          {
            "name": "台山市",
            "pid": 83,
            "code": 766
          },
          {
            "name": "开平市",
            "pid": 83,
            "code": 767
          },
          {
            "name": "鹤山市",
            "pid": 83,
            "code": 768
          },
          {
            "name": "恩平市",
            "pid": 83,
            "code": 769
          }
        ]
      },
      {
        "name": "揭阳",
        "pid": 6,
        "code": 84,
        "sub": [
          {
            "name": "榕城区",
            "pid": 84,
            "code": 770
          },
          {
            "name": "普宁市",
            "pid": 84,
            "code": 771
          },
          {
            "name": "揭东县",
            "pid": 84,
            "code": 772
          },
          {
            "name": "揭西县",
            "pid": 84,
            "code": 773
          },
          {
            "name": "惠来县",
            "pid": 84,
            "code": 774
          }
        ]
      },
      {
        "name": "茂名",
        "pid": 6,
        "code": 85,
        "sub": [
          {
            "name": "茂南区",
            "pid": 85,
            "code": 775
          },
          {
            "name": "茂港区",
            "pid": 85,
            "code": 776
          },
          {
            "name": "高州市",
            "pid": 85,
            "code": 777
          },
          {
            "name": "化州市",
            "pid": 85,
            "code": 778
          },
          {
            "name": "信宜市",
            "pid": 85,
            "code": 779
          },
          {
            "name": "电白县",
            "pid": 85,
            "code": 780
          }
        ]
      },
      {
        "name": "梅州",
        "pid": 6,
        "code": 86,
        "sub": [
          {
            "name": "梅县",
            "pid": 86,
            "code": 781
          },
          {
            "name": "梅江区",
            "pid": 86,
            "code": 782
          },
          {
            "name": "兴宁市",
            "pid": 86,
            "code": 783
          },
          {
            "name": "大埔县",
            "pid": 86,
            "code": 784
          },
          {
            "name": "丰顺县",
            "pid": 86,
            "code": 785
          },
          {
            "name": "五华县",
            "pid": 86,
            "code": 786
          },
          {
            "name": "平远县",
            "pid": 86,
            "code": 787
          },
          {
            "name": "蕉岭县",
            "pid": 86,
            "code": 788
          }
        ]
      },
      {
        "name": "清远",
        "pid": 6,
        "code": 87,
        "sub": [
          {
            "name": "清城区",
            "pid": 87,
            "code": 789
          },
          {
            "name": "英德市",
            "pid": 87,
            "code": 790
          },
          {
            "name": "连州市",
            "pid": 87,
            "code": 791
          },
          {
            "name": "佛冈县",
            "pid": 87,
            "code": 792
          },
          {
            "name": "阳山县",
            "pid": 87,
            "code": 793
          },
          {
            "name": "清新县",
            "pid": 87,
            "code": 794
          },
          {
            "name": "连山",
            "pid": 87,
            "code": 795
          },
          {
            "name": "连南",
            "pid": 87,
            "code": 796
          }
        ]
      },
      {
        "name": "汕头",
        "pid": 6,
        "code": 88,
        "sub": [
          {
            "name": "南澳县",
            "pid": 88,
            "code": 797
          },
          {
            "name": "潮阳区",
            "pid": 88,
            "code": 798
          },
          {
            "name": "澄海区",
            "pid": 88,
            "code": 799
          },
          {
            "name": "龙湖区",
            "pid": 88,
            "code": 800
          },
          {
            "name": "金平区",
            "pid": 88,
            "code": 801
          },
          {
            "name": "濠江区",
            "pid": 88,
            "code": 802
          },
          {
            "name": "潮南区",
            "pid": 88,
            "code": 803
          }
        ]
      },
      {
        "name": "汕尾",
        "pid": 6,
        "code": 89,
        "sub": [
          {
            "name": "城区",
            "pid": 89,
            "code": 804
          },
          {
            "name": "陆丰市",
            "pid": 89,
            "code": 805
          },
          {
            "name": "海丰县",
            "pid": 89,
            "code": 806
          },
          {
            "name": "陆河县",
            "pid": 89,
            "code": 807
          }
        ]
      },
      {
        "name": "韶关",
        "pid": 6,
        "code": 90,
        "sub": [
          {
            "name": "曲江县",
            "pid": 90,
            "code": 808
          },
          {
            "name": "浈江区",
            "pid": 90,
            "code": 809
          },
          {
            "name": "武江区",
            "pid": 90,
            "code": 810
          },
          {
            "name": "曲江区",
            "pid": 90,
            "code": 811
          },
          {
            "name": "乐昌市",
            "pid": 90,
            "code": 812
          },
          {
            "name": "南雄市",
            "pid": 90,
            "code": 813
          },
          {
            "name": "始兴县",
            "pid": 90,
            "code": 814
          },
          {
            "name": "仁化县",
            "pid": 90,
            "code": 815
          },
          {
            "name": "翁源县",
            "pid": 90,
            "code": 816
          },
          {
            "name": "新丰县",
            "pid": 90,
            "code": 817
          },
          {
            "name": "乳源",
            "pid": 90,
            "code": 818
          }
        ]
      },
      {
        "name": "阳江",
        "pid": 6,
        "code": 91,
        "sub": [
          {
            "name": "江城区",
            "pid": 91,
            "code": 819
          },
          {
            "name": "阳春市",
            "pid": 91,
            "code": 820
          },
          {
            "name": "阳西县",
            "pid": 91,
            "code": 821
          },
          {
            "name": "阳东县",
            "pid": 91,
            "code": 822
          }
        ]
      },
      {
        "name": "云浮",
        "pid": 6,
        "code": 92,
        "sub": [
          {
            "name": "云城区",
            "pid": 92,
            "code": 823
          },
          {
            "name": "罗定市",
            "pid": 92,
            "code": 824
          },
          {
            "name": "新兴县",
            "pid": 92,
            "code": 825
          },
          {
            "name": "郁南县",
            "pid": 92,
            "code": 826
          },
          {
            "name": "云安县",
            "pid": 92,
            "code": 827
          }
        ]
      },
      {
        "name": "湛江",
        "pid": 6,
        "code": 93,
        "sub": [
          {
            "name": "赤坎区",
            "pid": 93,
            "code": 828
          },
          {
            "name": "霞山区",
            "pid": 93,
            "code": 829
          },
          {
            "name": "坡头区",
            "pid": 93,
            "code": 830
          },
          {
            "name": "麻章区",
            "pid": 93,
            "code": 831
          },
          {
            "name": "廉江市",
            "pid": 93,
            "code": 832
          },
          {
            "name": "雷州市",
            "pid": 93,
            "code": 833
          },
          {
            "name": "吴川市",
            "pid": 93,
            "code": 834
          },
          {
            "name": "遂溪县",
            "pid": 93,
            "code": 835
          },
          {
            "name": "徐闻县",
            "pid": 93,
            "code": 836
          }
        ]
      },
      {
        "name": "肇庆",
        "pid": 6,
        "code": 94,
        "sub": [
          {
            "name": "肇庆市",
            "pid": 94,
            "code": 837
          },
          {
            "name": "高要市",
            "pid": 94,
            "code": 838
          },
          {
            "name": "四会市",
            "pid": 94,
            "code": 839
          },
          {
            "name": "广宁县",
            "pid": 94,
            "code": 840
          },
          {
            "name": "怀集县",
            "pid": 94,
            "code": 841
          },
          {
            "name": "封开县",
            "pid": 94,
            "code": 842
          },
          {
            "name": "德庆县",
            "pid": 94,
            "code": 843
          }
        ]
      },
      {
        "name": "中山",
        "pid": 6,
        "code": 95,
        "sub": [
          {
            "name": "石岐街道",
            "pid": 95,
            "code": 844
          },
          {
            "name": "东区街道",
            "pid": 95,
            "code": 845
          },
          {
            "name": "西区街道",
            "pid": 95,
            "code": 846
          },
          {
            "name": "环城街道",
            "pid": 95,
            "code": 847
          },
          {
            "name": "中山港街道",
            "pid": 95,
            "code": 848
          },
          {
            "name": "五桂山街道",
            "pid": 95,
            "code": 849
          }
        ]
      },
      {
        "name": "珠海",
        "pid": 6,
        "code": 96,
        "sub": [
          {
            "name": "香洲区",
            "pid": 96,
            "code": 850
          },
          {
            "name": "斗门区",
            "pid": 96,
            "code": 851
          },
          {
            "name": "金湾区",
            "pid": 96,
            "code": 852
          }
        ]
      }
    ]
  },
  {
    "name": "广西",
    "code": 7,
    "sub": [
      {
        "name": "南宁",
        "pid": 7,
        "code": 97,
        "sub": [
          {
            "name": "邕宁区",
            "pid": 97,
            "code": 853
          },
          {
            "name": "青秀区",
            "pid": 97,
            "code": 854
          },
          {
            "name": "兴宁区",
            "pid": 97,
            "code": 855
          },
          {
            "name": "良庆区",
            "pid": 97,
            "code": 856
          },
          {
            "name": "西乡塘区",
            "pid": 97,
            "code": 857
          },
          {
            "name": "江南区",
            "pid": 97,
            "code": 858
          },
          {
            "name": "武鸣县",
            "pid": 97,
            "code": 859
          },
          {
            "name": "隆安县",
            "pid": 97,
            "code": 860
          },
          {
            "name": "马山县",
            "pid": 97,
            "code": 861
          },
          {
            "name": "上林县",
            "pid": 97,
            "code": 862
          },
          {
            "name": "宾阳县",
            "pid": 97,
            "code": 863
          },
          {
            "name": "横县",
            "pid": 97,
            "code": 864
          }
        ]
      },
      {
        "name": "桂林",
        "pid": 7,
        "code": 98,
        "sub": [
          {
            "name": "秀峰区",
            "pid": 98,
            "code": 865
          },
          {
            "name": "叠彩区",
            "pid": 98,
            "code": 866
          },
          {
            "name": "象山区",
            "pid": 98,
            "code": 867
          },
          {
            "name": "七星区",
            "pid": 98,
            "code": 868
          },
          {
            "name": "雁山区",
            "pid": 98,
            "code": 869
          },
          {
            "name": "阳朔县",
            "pid": 98,
            "code": 870
          },
          {
            "name": "临桂县",
            "pid": 98,
            "code": 871
          },
          {
            "name": "灵川县",
            "pid": 98,
            "code": 872
          },
          {
            "name": "全州县",
            "pid": 98,
            "code": 873
          },
          {
            "name": "平乐县",
            "pid": 98,
            "code": 874
          },
          {
            "name": "兴安县",
            "pid": 98,
            "code": 875
          },
          {
            "name": "灌阳县",
            "pid": 98,
            "code": 876
          },
          {
            "name": "荔浦县",
            "pid": 98,
            "code": 877
          },
          {
            "name": "资源县",
            "pid": 98,
            "code": 878
          },
          {
            "name": "永福县",
            "pid": 98,
            "code": 879
          },
          {
            "name": "龙胜",
            "pid": 98,
            "code": 880
          },
          {
            "name": "恭城",
            "pid": 98,
            "code": 881
          }
        ]
      },
      {
        "name": "百色",
        "pid": 7,
        "code": 99,
        "sub": [
          {
            "name": "右江区",
            "pid": 99,
            "code": 882
          },
          {
            "name": "凌云县",
            "pid": 99,
            "code": 883
          },
          {
            "name": "平果县",
            "pid": 99,
            "code": 884
          },
          {
            "name": "西林县",
            "pid": 99,
            "code": 885
          },
          {
            "name": "乐业县",
            "pid": 99,
            "code": 886
          },
          {
            "name": "德保县",
            "pid": 99,
            "code": 887
          },
          {
            "name": "田林县",
            "pid": 99,
            "code": 888
          },
          {
            "name": "田阳县",
            "pid": 99,
            "code": 889
          },
          {
            "name": "靖西县",
            "pid": 99,
            "code": 890
          },
          {
            "name": "田东县",
            "pid": 99,
            "code": 891
          },
          {
            "name": "那坡县",
            "pid": 99,
            "code": 892
          },
          {
            "name": "隆林",
            "pid": 99,
            "code": 893
          }
        ]
      },
      {
        "name": "北海",
        "pid": 7,
        "code": 100,
        "sub": [
          {
            "name": "海城区",
            "pid": 100,
            "code": 894
          },
          {
            "name": "银海区",
            "pid": 100,
            "code": 895
          },
          {
            "name": "铁山港区",
            "pid": 100,
            "code": 896
          },
          {
            "name": "合浦县",
            "pid": 100,
            "code": 897
          }
        ]
      },
      {
        "name": "崇左",
        "pid": 7,
        "code": 101,
        "sub": [
          {
            "name": "江州区",
            "pid": 101,
            "code": 898
          },
          {
            "name": "凭祥市",
            "pid": 101,
            "code": 899
          },
          {
            "name": "宁明县",
            "pid": 101,
            "code": 900
          },
          {
            "name": "扶绥县",
            "pid": 101,
            "code": 901
          },
          {
            "name": "龙州县",
            "pid": 101,
            "code": 902
          },
          {
            "name": "大新县",
            "pid": 101,
            "code": 903
          },
          {
            "name": "天等县",
            "pid": 101,
            "code": 904
          }
        ]
      },
      {
        "name": "防城港",
        "pid": 7,
        "code": 102,
        "sub": [
          {
            "name": "港口区",
            "pid": 102,
            "code": 905
          },
          {
            "name": "防城区",
            "pid": 102,
            "code": 906
          },
          {
            "name": "东兴市",
            "pid": 102,
            "code": 907
          },
          {
            "name": "上思县",
            "pid": 102,
            "code": 908
          }
        ]
      },
      {
        "name": "贵港",
        "pid": 7,
        "code": 103,
        "sub": [
          {
            "name": "港北区",
            "pid": 103,
            "code": 909
          },
          {
            "name": "港南区",
            "pid": 103,
            "code": 910
          },
          {
            "name": "覃塘区",
            "pid": 103,
            "code": 911
          },
          {
            "name": "桂平市",
            "pid": 103,
            "code": 912
          },
          {
            "name": "平南县",
            "pid": 103,
            "code": 913
          }
        ]
      },
      {
        "name": "河池",
        "pid": 7,
        "code": 104,
        "sub": [
          {
            "name": "金城江区",
            "pid": 104,
            "code": 914
          },
          {
            "name": "宜州市",
            "pid": 104,
            "code": 915
          },
          {
            "name": "天峨县",
            "pid": 104,
            "code": 916
          },
          {
            "name": "凤山县",
            "pid": 104,
            "code": 917
          },
          {
            "name": "南丹县",
            "pid": 104,
            "code": 918
          },
          {
            "name": "东兰县",
            "pid": 104,
            "code": 919
          },
          {
            "name": "都安",
            "pid": 104,
            "code": 920
          },
          {
            "name": "罗城",
            "pid": 104,
            "code": 921
          },
          {
            "name": "巴马",
            "pid": 104,
            "code": 922
          },
          {
            "name": "环江",
            "pid": 104,
            "code": 923
          },
          {
            "name": "大化",
            "pid": 104,
            "code": 924
          }
        ]
      },
      {
        "name": "贺州",
        "pid": 7,
        "code": 105,
        "sub": [
          {
            "name": "八步区",
            "pid": 105,
            "code": 925
          },
          {
            "name": "钟山县",
            "pid": 105,
            "code": 926
          },
          {
            "name": "昭平县",
            "pid": 105,
            "code": 927
          },
          {
            "name": "富川",
            "pid": 105,
            "code": 928
          }
        ]
      },
      {
        "name": "来宾",
        "pid": 7,
        "code": 106,
        "sub": [
          {
            "name": "兴宾区",
            "pid": 106,
            "code": 929
          },
          {
            "name": "合山市",
            "pid": 106,
            "code": 930
          },
          {
            "name": "象州县",
            "pid": 106,
            "code": 931
          },
          {
            "name": "武宣县",
            "pid": 106,
            "code": 932
          },
          {
            "name": "忻城县",
            "pid": 106,
            "code": 933
          },
          {
            "name": "金秀",
            "pid": 106,
            "code": 934
          }
        ]
      },
      {
        "name": "柳州",
        "pid": 7,
        "code": 107,
        "sub": [
          {
            "name": "城中区",
            "pid": 107,
            "code": 935
          },
          {
            "name": "鱼峰区",
            "pid": 107,
            "code": 936
          },
          {
            "name": "柳北区",
            "pid": 107,
            "code": 937
          },
          {
            "name": "柳南区",
            "pid": 107,
            "code": 938
          },
          {
            "name": "柳江县",
            "pid": 107,
            "code": 939
          },
          {
            "name": "柳城县",
            "pid": 107,
            "code": 940
          },
          {
            "name": "鹿寨县",
            "pid": 107,
            "code": 941
          },
          {
            "name": "融安县",
            "pid": 107,
            "code": 942
          },
          {
            "name": "融水",
            "pid": 107,
            "code": 943
          },
          {
            "name": "三江",
            "pid": 107,
            "code": 944
          }
        ]
      },
      {
        "name": "钦州",
        "pid": 7,
        "code": 108,
        "sub": [
          {
            "name": "钦南区",
            "pid": 108,
            "code": 945
          },
          {
            "name": "钦北区",
            "pid": 108,
            "code": 946
          },
          {
            "name": "灵山县",
            "pid": 108,
            "code": 947
          },
          {
            "name": "浦北县",
            "pid": 108,
            "code": 948
          }
        ]
      },
      {
        "name": "梧州",
        "pid": 7,
        "code": 109,
        "sub": [
          {
            "name": "万秀区",
            "pid": 109,
            "code": 949
          },
          {
            "name": "蝶山区",
            "pid": 109,
            "code": 950
          },
          {
            "name": "长洲区",
            "pid": 109,
            "code": 951
          },
          {
            "name": "岑溪市",
            "pid": 109,
            "code": 952
          },
          {
            "name": "苍梧县",
            "pid": 109,
            "code": 953
          },
          {
            "name": "藤县",
            "pid": 109,
            "code": 954
          },
          {
            "name": "蒙山县",
            "pid": 109,
            "code": 955
          }
        ]
      },
      {
        "name": "玉林",
        "pid": 7,
        "code": 110,
        "sub": [
          {
            "name": "玉州区",
            "pid": 110,
            "code": 956
          },
          {
            "name": "北流市",
            "pid": 110,
            "code": 957
          },
          {
            "name": "容县",
            "pid": 110,
            "code": 958
          },
          {
            "name": "陆川县",
            "pid": 110,
            "code": 959
          },
          {
            "name": "博白县",
            "pid": 110,
            "code": 960
          },
          {
            "name": "兴业县",
            "pid": 110,
            "code": 961
          }
        ]
      }
    ]
  },
  {
    "name": "贵州",
    "code": 8,
    "sub": [
      {
        "name": "贵阳",
        "pid": 8,
        "code": 111,
        "sub": [
          {
            "name": "南明区",
            "pid": 111,
            "code": 962
          },
          {
            "name": "云岩区",
            "pid": 111,
            "code": 963
          },
          {
            "name": "花溪区",
            "pid": 111,
            "code": 964
          },
          {
            "name": "乌当区",
            "pid": 111,
            "code": 965
          },
          {
            "name": "白云区",
            "pid": 111,
            "code": 966
          },
          {
            "name": "小河区",
            "pid": 111,
            "code": 967
          },
          {
            "name": "金阳新区",
            "pid": 111,
            "code": 968
          },
          {
            "name": "新天园区",
            "pid": 111,
            "code": 969
          },
          {
            "name": "清镇市",
            "pid": 111,
            "code": 970
          },
          {
            "name": "开阳县",
            "pid": 111,
            "code": 971
          },
          {
            "name": "修文县",
            "pid": 111,
            "code": 972
          },
          {
            "name": "息烽县",
            "pid": 111,
            "code": 973
          }
        ]
      },
      {
        "name": "安顺",
        "pid": 8,
        "code": 112,
        "sub": [
          {
            "name": "西秀区",
            "pid": 112,
            "code": 974
          },
          {
            "name": "关岭",
            "pid": 112,
            "code": 975
          },
          {
            "name": "镇宁",
            "pid": 112,
            "code": 976
          },
          {
            "name": "紫云",
            "pid": 112,
            "code": 977
          },
          {
            "name": "平坝县",
            "pid": 112,
            "code": 978
          },
          {
            "name": "普定县",
            "pid": 112,
            "code": 979
          }
        ]
      },
      {
        "name": "毕节",
        "pid": 8,
        "code": 113,
        "sub": [
          {
            "name": "毕节市",
            "pid": 113,
            "code": 980
          },
          {
            "name": "大方县",
            "pid": 113,
            "code": 981
          },
          {
            "name": "黔西县",
            "pid": 113,
            "code": 982
          },
          {
            "name": "金沙县",
            "pid": 113,
            "code": 983
          },
          {
            "name": "织金县",
            "pid": 113,
            "code": 984
          },
          {
            "name": "纳雍县",
            "pid": 113,
            "code": 985
          },
          {
            "name": "赫章县",
            "pid": 113,
            "code": 986
          },
          {
            "name": "威宁",
            "pid": 113,
            "code": 987
          }
        ]
      },
      {
        "name": "六盘水",
        "pid": 8,
        "code": 114,
        "sub": [
          {
            "name": "钟山区",
            "pid": 114,
            "code": 988
          },
          {
            "name": "六枝特区",
            "pid": 114,
            "code": 989
          },
          {
            "name": "水城县",
            "pid": 114,
            "code": 990
          },
          {
            "name": "盘县",
            "pid": 114,
            "code": 991
          }
        ]
      },
      {
        "name": "黔东南",
        "pid": 8,
        "code": 115,
        "sub": [
          {
            "name": "凯里市",
            "pid": 115,
            "code": 992
          },
          {
            "name": "黄平县",
            "pid": 115,
            "code": 993
          },
          {
            "name": "施秉县",
            "pid": 115,
            "code": 994
          },
          {
            "name": "三穗县",
            "pid": 115,
            "code": 995
          },
          {
            "name": "镇远县",
            "pid": 115,
            "code": 996
          },
          {
            "name": "岑巩县",
            "pid": 115,
            "code": 997
          },
          {
            "name": "天柱县",
            "pid": 115,
            "code": 998
          },
          {
            "name": "锦屏县",
            "pid": 115,
            "code": 999
          },
          {
            "name": "剑河县",
            "pid": 115,
            "code": 1000
          },
          {
            "name": "台江县",
            "pid": 115,
            "code": 1001
          },
          {
            "name": "黎平县",
            "pid": 115,
            "code": 1002
          },
          {
            "name": "榕江县",
            "pid": 115,
            "code": 1003
          },
          {
            "name": "从江县",
            "pid": 115,
            "code": 1004
          },
          {
            "name": "雷山县",
            "pid": 115,
            "code": 1005
          },
          {
            "name": "麻江县",
            "pid": 115,
            "code": 1006
          },
          {
            "name": "丹寨县",
            "pid": 115,
            "code": 1007
          }
        ]
      },
      {
        "name": "黔南",
        "pid": 8,
        "code": 116,
        "sub": [
          {
            "name": "都匀市",
            "pid": 116,
            "code": 1008
          },
          {
            "name": "福泉市",
            "pid": 116,
            "code": 1009
          },
          {
            "name": "荔波县",
            "pid": 116,
            "code": 1010
          },
          {
            "name": "贵定县",
            "pid": 116,
            "code": 1011
          },
          {
            "name": "瓮安县",
            "pid": 116,
            "code": 1012
          },
          {
            "name": "独山县",
            "pid": 116,
            "code": 1013
          },
          {
            "name": "平塘县",
            "pid": 116,
            "code": 1014
          },
          {
            "name": "罗甸县",
            "pid": 116,
            "code": 1015
          },
          {
            "name": "长顺县",
            "pid": 116,
            "code": 1016
          },
          {
            "name": "龙里县",
            "pid": 116,
            "code": 1017
          },
          {
            "name": "惠水县",
            "pid": 116,
            "code": 1018
          },
          {
            "name": "三都",
            "pid": 116,
            "code": 1019
          }
        ]
      },
      {
        "name": "黔西南",
        "pid": 8,
        "code": 117,
        "sub": [
          {
            "name": "兴义市",
            "pid": 117,
            "code": 1020
          },
          {
            "name": "兴仁县",
            "pid": 117,
            "code": 1021
          },
          {
            "name": "普安县",
            "pid": 117,
            "code": 1022
          },
          {
            "name": "晴隆县",
            "pid": 117,
            "code": 1023
          },
          {
            "name": "贞丰县",
            "pid": 117,
            "code": 1024
          },
          {
            "name": "望谟县",
            "pid": 117,
            "code": 1025
          },
          {
            "name": "册亨县",
            "pid": 117,
            "code": 1026
          },
          {
            "name": "安龙县",
            "pid": 117,
            "code": 1027
          }
        ]
      },
      {
        "name": "铜仁",
        "pid": 8,
        "code": 118,
        "sub": [
          {
            "name": "铜仁市",
            "pid": 118,
            "code": 1028
          },
          {
            "name": "江口县",
            "pid": 118,
            "code": 1029
          },
          {
            "name": "石阡县",
            "pid": 118,
            "code": 1030
          },
          {
            "name": "思南县",
            "pid": 118,
            "code": 1031
          },
          {
            "name": "德江县",
            "pid": 118,
            "code": 1032
          },
          {
            "name": "玉屏",
            "pid": 118,
            "code": 1033
          },
          {
            "name": "印江",
            "pid": 118,
            "code": 1034
          },
          {
            "name": "沿河",
            "pid": 118,
            "code": 1035
          },
          {
            "name": "松桃",
            "pid": 118,
            "code": 1036
          },
          {
            "name": "万山特区",
            "pid": 118,
            "code": 1037
          }
        ]
      },
      {
        "name": "遵义",
        "pid": 8,
        "code": 119,
        "sub": [
          {
            "name": "红花岗区",
            "pid": 119,
            "code": 1038
          },
          {
            "name": "务川县",
            "pid": 119,
            "code": 1039
          },
          {
            "name": "道真县",
            "pid": 119,
            "code": 1040
          },
          {
            "name": "汇川区",
            "pid": 119,
            "code": 1041
          },
          {
            "name": "赤水市",
            "pid": 119,
            "code": 1042
          },
          {
            "name": "仁怀市",
            "pid": 119,
            "code": 1043
          },
          {
            "name": "遵义县",
            "pid": 119,
            "code": 1044
          },
          {
            "name": "桐梓县",
            "pid": 119,
            "code": 1045
          },
          {
            "name": "绥阳县",
            "pid": 119,
            "code": 1046
          },
          {
            "name": "正安县",
            "pid": 119,
            "code": 1047
          },
          {
            "name": "凤冈县",
            "pid": 119,
            "code": 1048
          },
          {
            "name": "湄潭县",
            "pid": 119,
            "code": 1049
          },
          {
            "name": "余庆县",
            "pid": 119,
            "code": 1050
          },
          {
            "name": "习水县",
            "pid": 119,
            "code": 1051
          },
          {
            "name": "道真",
            "pid": 119,
            "code": 1052
          },
          {
            "name": "务川",
            "pid": 119,
            "code": 1053
          }
        ]
      }
    ]
  },
  {
    "name": "海南",
    "code": 9,
    "sub": [
      {
        "name": "海口",
        "pid": 9,
        "code": 120,
        "sub": [
          {
            "name": "秀英区",
            "pid": 120,
            "code": 1054
          },
          {
            "name": "龙华区",
            "pid": 120,
            "code": 1055
          },
          {
            "name": "琼山区",
            "pid": 120,
            "code": 1056
          },
          {
            "name": "美兰区",
            "pid": 120,
            "code": 1057
          }
        ]
      },
      {
        "name": "三亚",
        "pid": 9,
        "code": 121
      },
      {
        "name": "白沙",
        "pid": 9,
        "code": 122
      },
      {
        "name": "保亭",
        "pid": 9,
        "code": 123
      },
      {
        "name": "昌江",
        "pid": 9,
        "code": 124
      },
      {
        "name": "澄迈县",
        "pid": 9,
        "code": 125
      },
      {
        "name": "定安县",
        "pid": 9,
        "code": 126
      },
      {
        "name": "东方",
        "pid": 9,
        "code": 127
      },
      {
        "name": "乐东",
        "pid": 9,
        "code": 128
      },
      {
        "name": "临高县",
        "pid": 9,
        "code": 129
      },
      {
        "name": "陵水",
        "pid": 9,
        "code": 130
      },
      {
        "name": "琼海",
        "pid": 9,
        "code": 131
      },
      {
        "name": "琼中",
        "pid": 9,
        "code": 132
      },
      {
        "name": "屯昌县",
        "pid": 9,
        "code": 133
      },
      {
        "name": "万宁",
        "pid": 9,
        "code": 134
      },
      {
        "name": "文昌",
        "pid": 9,
        "code": 135
      },
      {
        "name": "五指山",
        "pid": 9,
        "code": 136
      },
      {
        "name": "儋州",
        "pid": 9,
        "code": 137,
        "sub": [
          {
            "name": "市区",
            "pid": 137,
            "code": 1058
          },
          {
            "name": "洋浦开发区",
            "pid": 137,
            "code": 1059
          },
          {
            "name": "那大镇",
            "pid": 137,
            "code": 1060
          },
          {
            "name": "王五镇",
            "pid": 137,
            "code": 1061
          },
          {
            "name": "雅星镇",
            "pid": 137,
            "code": 1062
          },
          {
            "name": "大成镇",
            "pid": 137,
            "code": 1063
          },
          {
            "name": "中和镇",
            "pid": 137,
            "code": 1064
          },
          {
            "name": "峨蔓镇",
            "pid": 137,
            "code": 1065
          },
          {
            "name": "南丰镇",
            "pid": 137,
            "code": 1066
          },
          {
            "name": "白马井镇",
            "pid": 137,
            "code": 1067
          },
          {
            "name": "兰洋镇",
            "pid": 137,
            "code": 1068
          },
          {
            "name": "和庆镇",
            "pid": 137,
            "code": 1069
          },
          {
            "name": "海头镇",
            "pid": 137,
            "code": 1070
          },
          {
            "name": "排浦镇",
            "pid": 137,
            "code": 1071
          },
          {
            "name": "东成镇",
            "pid": 137,
            "code": 1072
          },
          {
            "name": "光村镇",
            "pid": 137,
            "code": 1073
          },
          {
            "name": "木棠镇",
            "pid": 137,
            "code": 1074
          },
          {
            "name": "新州镇",
            "pid": 137,
            "code": 1075
          },
          {
            "name": "三都镇",
            "pid": 137,
            "code": 1076
          },
          {
            "name": "其他",
            "pid": 137,
            "code": 1077
          }
        ]
      }
    ]
  },
  {
    "name": "河北",
    "code": 10,
    "sub": [
      {
        "name": "石家庄",
        "pid": 10,
        "code": 138,
        "sub": [
          {
            "name": "长安区",
            "pid": 138,
            "code": 1078
          },
          {
            "name": "桥东区",
            "pid": 138,
            "code": 1079
          },
          {
            "name": "桥西区",
            "pid": 138,
            "code": 1080
          },
          {
            "name": "新华区",
            "pid": 138,
            "code": 1081
          },
          {
            "name": "裕华区",
            "pid": 138,
            "code": 1082
          },
          {
            "name": "井陉矿区",
            "pid": 138,
            "code": 1083
          },
          {
            "name": "高新区",
            "pid": 138,
            "code": 1084
          },
          {
            "name": "辛集市",
            "pid": 138,
            "code": 1085
          },
          {
            "name": "藁城市",
            "pid": 138,
            "code": 1086
          },
          {
            "name": "晋州市",
            "pid": 138,
            "code": 1087
          },
          {
            "name": "新乐市",
            "pid": 138,
            "code": 1088
          },
          {
            "name": "鹿泉市",
            "pid": 138,
            "code": 1089
          },
          {
            "name": "井陉县",
            "pid": 138,
            "code": 1090
          },
          {
            "name": "正定县",
            "pid": 138,
            "code": 1091
          },
          {
            "name": "栾城县",
            "pid": 138,
            "code": 1092
          },
          {
            "name": "行唐县",
            "pid": 138,
            "code": 1093
          },
          {
            "name": "灵寿县",
            "pid": 138,
            "code": 1094
          },
          {
            "name": "高邑县",
            "pid": 138,
            "code": 1095
          },
          {
            "name": "深泽县",
            "pid": 138,
            "code": 1096
          },
          {
            "name": "赞皇县",
            "pid": 138,
            "code": 1097
          },
          {
            "name": "无极县",
            "pid": 138,
            "code": 1098
          },
          {
            "name": "平山县",
            "pid": 138,
            "code": 1099
          },
          {
            "name": "元氏县",
            "pid": 138,
            "code": 1100
          },
          {
            "name": "赵县",
            "pid": 138,
            "code": 1101
          }
        ]
      },
      {
        "name": "保定",
        "pid": 10,
        "code": 139,
        "sub": [
          {
            "name": "新市区",
            "pid": 139,
            "code": 1102
          },
          {
            "name": "南市区",
            "pid": 139,
            "code": 1103
          },
          {
            "name": "北市区",
            "pid": 139,
            "code": 1104
          },
          {
            "name": "涿州市",
            "pid": 139,
            "code": 1105
          },
          {
            "name": "定州市",
            "pid": 139,
            "code": 1106
          },
          {
            "name": "安国市",
            "pid": 139,
            "code": 1107
          },
          {
            "name": "高碑店市",
            "pid": 139,
            "code": 1108
          },
          {
            "name": "满城县",
            "pid": 139,
            "code": 1109
          },
          {
            "name": "清苑县",
            "pid": 139,
            "code": 1110
          },
          {
            "name": "涞水县",
            "pid": 139,
            "code": 1111
          },
          {
            "name": "阜平县",
            "pid": 139,
            "code": 1112
          },
          {
            "name": "徐水县",
            "pid": 139,
            "code": 1113
          },
          {
            "name": "定兴县",
            "pid": 139,
            "code": 1114
          },
          {
            "name": "唐县",
            "pid": 139,
            "code": 1115
          },
          {
            "name": "高阳县",
            "pid": 139,
            "code": 1116
          },
          {
            "name": "容城县",
            "pid": 139,
            "code": 1117
          },
          {
            "name": "涞源县",
            "pid": 139,
            "code": 1118
          },
          {
            "name": "望都县",
            "pid": 139,
            "code": 1119
          },
          {
            "name": "安新县",
            "pid": 139,
            "code": 1120
          },
          {
            "name": "易县",
            "pid": 139,
            "code": 1121
          },
          {
            "name": "曲阳县",
            "pid": 139,
            "code": 1122
          },
          {
            "name": "蠡县",
            "pid": 139,
            "code": 1123
          },
          {
            "name": "顺平县",
            "pid": 139,
            "code": 1124
          },
          {
            "name": "博野县",
            "pid": 139,
            "code": 1125
          },
          {
            "name": "雄县",
            "pid": 139,
            "code": 1126
          }
        ]
      },
      {
        "name": "沧州",
        "pid": 10,
        "code": 140,
        "sub": [
          {
            "name": "运河区",
            "pid": 140,
            "code": 1127
          },
          {
            "name": "新华区",
            "pid": 140,
            "code": 1128
          },
          {
            "name": "泊头市",
            "pid": 140,
            "code": 1129
          },
          {
            "name": "任丘市",
            "pid": 140,
            "code": 1130
          },
          {
            "name": "黄骅市",
            "pid": 140,
            "code": 1131
          },
          {
            "name": "河间市",
            "pid": 140,
            "code": 1132
          },
          {
            "name": "沧县",
            "pid": 140,
            "code": 1133
          },
          {
            "name": "青县",
            "pid": 140,
            "code": 1134
          },
          {
            "name": "东光县",
            "pid": 140,
            "code": 1135
          },
          {
            "name": "海兴县",
            "pid": 140,
            "code": 1136
          },
          {
            "name": "盐山县",
            "pid": 140,
            "code": 1137
          },
          {
            "name": "肃宁县",
            "pid": 140,
            "code": 1138
          },
          {
            "name": "南皮县",
            "pid": 140,
            "code": 1139
          },
          {
            "name": "吴桥县",
            "pid": 140,
            "code": 1140
          },
          {
            "name": "献县",
            "pid": 140,
            "code": 1141
          },
          {
            "name": "孟村",
            "pid": 140,
            "code": 1142
          }
        ]
      },
      {
        "name": "承德",
        "pid": 10,
        "code": 141,
        "sub": [
          {
            "name": "双桥区",
            "pid": 141,
            "code": 1143
          },
          {
            "name": "双滦区",
            "pid": 141,
            "code": 1144
          },
          {
            "name": "鹰手营子矿区",
            "pid": 141,
            "code": 1145
          },
          {
            "name": "承德县",
            "pid": 141,
            "code": 1146
          },
          {
            "name": "兴隆县",
            "pid": 141,
            "code": 1147
          },
          {
            "name": "平泉县",
            "pid": 141,
            "code": 1148
          },
          {
            "name": "滦平县",
            "pid": 141,
            "code": 1149
          },
          {
            "name": "隆化县",
            "pid": 141,
            "code": 1150
          },
          {
            "name": "丰宁",
            "pid": 141,
            "code": 1151
          },
          {
            "name": "宽城",
            "pid": 141,
            "code": 1152
          },
          {
            "name": "围场",
            "pid": 141,
            "code": 1153
          }
        ]
      },
      {
        "name": "邯郸",
        "pid": 10,
        "code": 142,
        "sub": [
          {
            "name": "从台区",
            "pid": 142,
            "code": 1154
          },
          {
            "name": "复兴区",
            "pid": 142,
            "code": 1155
          },
          {
            "name": "邯山区",
            "pid": 142,
            "code": 1156
          },
          {
            "name": "峰峰矿区",
            "pid": 142,
            "code": 1157
          },
          {
            "name": "武安市",
            "pid": 142,
            "code": 1158
          },
          {
            "name": "邯郸县",
            "pid": 142,
            "code": 1159
          },
          {
            "name": "临漳县",
            "pid": 142,
            "code": 1160
          },
          {
            "name": "成安县",
            "pid": 142,
            "code": 1161
          },
          {
            "name": "大名县",
            "pid": 142,
            "code": 1162
          },
          {
            "name": "涉县",
            "pid": 142,
            "code": 1163
          },
          {
            "name": "磁县",
            "pid": 142,
            "code": 1164
          },
          {
            "name": "肥乡县",
            "pid": 142,
            "code": 1165
          },
          {
            "name": "永年县",
            "pid": 142,
            "code": 1166
          },
          {
            "name": "邱县",
            "pid": 142,
            "code": 1167
          },
          {
            "name": "鸡泽县",
            "pid": 142,
            "code": 1168
          },
          {
            "name": "广平县",
            "pid": 142,
            "code": 1169
          },
          {
            "name": "馆陶县",
            "pid": 142,
            "code": 1170
          },
          {
            "name": "魏县",
            "pid": 142,
            "code": 1171
          },
          {
            "name": "曲周县",
            "pid": 142,
            "code": 1172
          }
        ]
      },
      {
        "name": "衡水",
        "pid": 10,
        "code": 143,
        "sub": [
          {
            "name": "桃城区",
            "pid": 143,
            "code": 1173
          },
          {
            "name": "冀州市",
            "pid": 143,
            "code": 1174
          },
          {
            "name": "深州市",
            "pid": 143,
            "code": 1175
          },
          {
            "name": "枣强县",
            "pid": 143,
            "code": 1176
          },
          {
            "name": "武邑县",
            "pid": 143,
            "code": 1177
          },
          {
            "name": "武强县",
            "pid": 143,
            "code": 1178
          },
          {
            "name": "饶阳县",
            "pid": 143,
            "code": 1179
          },
          {
            "name": "安平县",
            "pid": 143,
            "code": 1180
          },
          {
            "name": "故城县",
            "pid": 143,
            "code": 1181
          },
          {
            "name": "景县",
            "pid": 143,
            "code": 1182
          },
          {
            "name": "阜城县",
            "pid": 143,
            "code": 1183
          }
        ]
      },
      {
        "name": "廊坊",
        "pid": 10,
        "code": 144,
        "sub": [
          {
            "name": "安次区",
            "pid": 144,
            "code": 1184
          },
          {
            "name": "广阳区",
            "pid": 144,
            "code": 1185
          },
          {
            "name": "霸州市",
            "pid": 144,
            "code": 1186
          },
          {
            "name": "三河市",
            "pid": 144,
            "code": 1187
          },
          {
            "name": "固安县",
            "pid": 144,
            "code": 1188
          },
          {
            "name": "永清县",
            "pid": 144,
            "code": 1189
          },
          {
            "name": "香河县",
            "pid": 144,
            "code": 1190
          },
          {
            "name": "大城县",
            "pid": 144,
            "code": 1191
          },
          {
            "name": "文安县",
            "pid": 144,
            "code": 1192
          },
          {
            "name": "大厂",
            "pid": 144,
            "code": 1193
          }
        ]
      },
      {
        "name": "秦皇岛",
        "pid": 10,
        "code": 145,
        "sub": [
          {
            "name": "海港区",
            "pid": 145,
            "code": 1194
          },
          {
            "name": "山海关区",
            "pid": 145,
            "code": 1195
          },
          {
            "name": "北戴河区",
            "pid": 145,
            "code": 1196
          },
          {
            "name": "昌黎县",
            "pid": 145,
            "code": 1197
          },
          {
            "name": "抚宁县",
            "pid": 145,
            "code": 1198
          },
          {
            "name": "卢龙县",
            "pid": 145,
            "code": 1199
          },
          {
            "name": "青龙",
            "pid": 145,
            "code": 1200
          }
        ]
      },
      {
        "name": "唐山",
        "pid": 10,
        "code": 146,
        "sub": [
          {
            "name": "路北区",
            "pid": 146,
            "code": 1201
          },
          {
            "name": "路南区",
            "pid": 146,
            "code": 1202
          },
          {
            "name": "古冶区",
            "pid": 146,
            "code": 1203
          },
          {
            "name": "开平区",
            "pid": 146,
            "code": 1204
          },
          {
            "name": "丰南区",
            "pid": 146,
            "code": 1205
          },
          {
            "name": "丰润区",
            "pid": 146,
            "code": 1206
          },
          {
            "name": "遵化市",
            "pid": 146,
            "code": 1207
          },
          {
            "name": "迁安市",
            "pid": 146,
            "code": 1208
          },
          {
            "name": "滦县",
            "pid": 146,
            "code": 1209
          },
          {
            "name": "滦南县",
            "pid": 146,
            "code": 1210
          },
          {
            "name": "乐亭县",
            "pid": 146,
            "code": 1211
          },
          {
            "name": "迁西县",
            "pid": 146,
            "code": 1212
          },
          {
            "name": "玉田县",
            "pid": 146,
            "code": 1213
          },
          {
            "name": "唐海县",
            "pid": 146,
            "code": 1214
          }
        ]
      },
      {
        "name": "邢台",
        "pid": 10,
        "code": 147,
        "sub": [
          {
            "name": "桥东区",
            "pid": 147,
            "code": 1215
          },
          {
            "name": "桥西区",
            "pid": 147,
            "code": 1216
          },
          {
            "name": "南宫市",
            "pid": 147,
            "code": 1217
          },
          {
            "name": "沙河市",
            "pid": 147,
            "code": 1218
          },
          {
            "name": "邢台县",
            "pid": 147,
            "code": 1219
          },
          {
            "name": "临城县",
            "pid": 147,
            "code": 1220
          },
          {
            "name": "内丘县",
            "pid": 147,
            "code": 1221
          },
          {
            "name": "柏乡县",
            "pid": 147,
            "code": 1222
          },
          {
            "name": "隆尧县",
            "pid": 147,
            "code": 1223
          },
          {
            "name": "任县",
            "pid": 147,
            "code": 1224
          },
          {
            "name": "南和县",
            "pid": 147,
            "code": 1225
          },
          {
            "name": "宁晋县",
            "pid": 147,
            "code": 1226
          },
          {
            "name": "巨鹿县",
            "pid": 147,
            "code": 1227
          },
          {
            "name": "新河县",
            "pid": 147,
            "code": 1228
          },
          {
            "name": "广宗县",
            "pid": 147,
            "code": 1229
          },
          {
            "name": "平乡县",
            "pid": 147,
            "code": 1230
          },
          {
            "name": "威县",
            "pid": 147,
            "code": 1231
          },
          {
            "name": "清河县",
            "pid": 147,
            "code": 1232
          },
          {
            "name": "临西县",
            "pid": 147,
            "code": 1233
          }
        ]
      },
      {
        "name": "张家口",
        "pid": 10,
        "code": 148,
        "sub": [
          {
            "name": "桥西区",
            "pid": 148,
            "code": 1234
          },
          {
            "name": "桥东区",
            "pid": 148,
            "code": 1235
          },
          {
            "name": "宣化区",
            "pid": 148,
            "code": 1236
          },
          {
            "name": "下花园区",
            "pid": 148,
            "code": 1237
          },
          {
            "name": "宣化县",
            "pid": 148,
            "code": 1238
          },
          {
            "name": "张北县",
            "pid": 148,
            "code": 1239
          },
          {
            "name": "康保县",
            "pid": 148,
            "code": 1240
          },
          {
            "name": "沽源县",
            "pid": 148,
            "code": 1241
          },
          {
            "name": "尚义县",
            "pid": 148,
            "code": 1242
          },
          {
            "name": "蔚县",
            "pid": 148,
            "code": 1243
          },
          {
            "name": "阳原县",
            "pid": 148,
            "code": 1244
          },
          {
            "name": "怀安县",
            "pid": 148,
            "code": 1245
          },
          {
            "name": "万全县",
            "pid": 148,
            "code": 1246
          },
          {
            "name": "怀来县",
            "pid": 148,
            "code": 1247
          },
          {
            "name": "涿鹿县",
            "pid": 148,
            "code": 1248
          },
          {
            "name": "赤城县",
            "pid": 148,
            "code": 1249
          },
          {
            "name": "崇礼县",
            "pid": 148,
            "code": 1250
          }
        ]
      }
    ]
  },
  {
    "name": "河南",
    "code": 11,
    "sub": [
      {
        "name": "郑州",
        "pid": 11,
        "code": 149,
        "sub": [
          {
            "name": "金水区",
            "pid": 149,
            "code": 1251
          },
          {
            "name": "邙山区",
            "pid": 149,
            "code": 1252
          },
          {
            "name": "二七区",
            "pid": 149,
            "code": 1253
          },
          {
            "name": "管城区",
            "pid": 149,
            "code": 1254
          },
          {
            "name": "中原区",
            "pid": 149,
            "code": 1255
          },
          {
            "name": "上街区",
            "pid": 149,
            "code": 1256
          },
          {
            "name": "惠济区",
            "pid": 149,
            "code": 1257
          },
          {
            "name": "郑东新区",
            "pid": 149,
            "code": 1258
          },
          {
            "name": "经济技术开发区",
            "pid": 149,
            "code": 1259
          },
          {
            "name": "高新开发区",
            "pid": 149,
            "code": 1260
          },
          {
            "name": "出口加工区",
            "pid": 149,
            "code": 1261
          },
          {
            "name": "巩义市",
            "pid": 149,
            "code": 1262
          },
          {
            "name": "荥阳市",
            "pid": 149,
            "code": 1263
          },
          {
            "name": "新密市",
            "pid": 149,
            "code": 1264
          },
          {
            "name": "新郑市",
            "pid": 149,
            "code": 1265
          },
          {
            "name": "登封市",
            "pid": 149,
            "code": 1266
          },
          {
            "name": "中牟县",
            "pid": 149,
            "code": 1267
          }
        ]
      },
      {
        "name": "洛阳",
        "pid": 11,
        "code": 150,
        "sub": [
          {
            "name": "西工区",
            "pid": 150,
            "code": 1268
          },
          {
            "name": "老城区",
            "pid": 150,
            "code": 1269
          },
          {
            "name": "涧西区",
            "pid": 150,
            "code": 1270
          },
          {
            "name": "瀍河回族区",
            "pid": 150,
            "code": 1271
          },
          {
            "name": "洛龙区",
            "pid": 150,
            "code": 1272
          },
          {
            "name": "吉利区",
            "pid": 150,
            "code": 1273
          },
          {
            "name": "偃师市",
            "pid": 150,
            "code": 1274
          },
          {
            "name": "孟津县",
            "pid": 150,
            "code": 1275
          },
          {
            "name": "新安县",
            "pid": 150,
            "code": 1276
          },
          {
            "name": "栾川县",
            "pid": 150,
            "code": 1277
          },
          {
            "name": "嵩县",
            "pid": 150,
            "code": 1278
          },
          {
            "name": "汝阳县",
            "pid": 150,
            "code": 1279
          },
          {
            "name": "宜阳县",
            "pid": 150,
            "code": 1280
          },
          {
            "name": "洛宁县",
            "pid": 150,
            "code": 1281
          },
          {
            "name": "伊川县",
            "pid": 150,
            "code": 1282
          }
        ]
      },
      {
        "name": "开封",
        "pid": 11,
        "code": 151,
        "sub": [
          {
            "name": "鼓楼区",
            "pid": 151,
            "code": 1283
          },
          {
            "name": "龙亭区",
            "pid": 151,
            "code": 1284
          },
          {
            "name": "顺河回族区",
            "pid": 151,
            "code": 1285
          },
          {
            "name": "金明区",
            "pid": 151,
            "code": 1286
          },
          {
            "name": "禹王台区",
            "pid": 151,
            "code": 1287
          },
          {
            "name": "杞县",
            "pid": 151,
            "code": 1288
          },
          {
            "name": "通许县",
            "pid": 151,
            "code": 1289
          },
          {
            "name": "尉氏县",
            "pid": 151,
            "code": 1290
          },
          {
            "name": "开封县",
            "pid": 151,
            "code": 1291
          },
          {
            "name": "兰考县",
            "pid": 151,
            "code": 1292
          }
        ]
      },
      {
        "name": "安阳",
        "pid": 11,
        "code": 152,
        "sub": [
          {
            "name": "北关区",
            "pid": 152,
            "code": 1293
          },
          {
            "name": "文峰区",
            "pid": 152,
            "code": 1294
          },
          {
            "name": "殷都区",
            "pid": 152,
            "code": 1295
          },
          {
            "name": "龙安区",
            "pid": 152,
            "code": 1296
          },
          {
            "name": "林州市",
            "pid": 152,
            "code": 1297
          },
          {
            "name": "安阳县",
            "pid": 152,
            "code": 1298
          },
          {
            "name": "汤阴县",
            "pid": 152,
            "code": 1299
          },
          {
            "name": "滑县",
            "pid": 152,
            "code": 1300
          },
          {
            "name": "内黄县",
            "pid": 152,
            "code": 1301
          }
        ]
      },
      {
        "name": "鹤壁",
        "pid": 11,
        "code": 153,
        "sub": [
          {
            "name": "淇滨区",
            "pid": 153,
            "code": 1302
          },
          {
            "name": "山城区",
            "pid": 153,
            "code": 1303
          },
          {
            "name": "鹤山区",
            "pid": 153,
            "code": 1304
          },
          {
            "name": "浚县",
            "pid": 153,
            "code": 1305
          },
          {
            "name": "淇县",
            "pid": 153,
            "code": 1306
          }
        ]
      },
      {
        "name": "济源",
        "pid": 11,
        "code": 154,
        "sub": [
          {
            "name": "济源市",
            "pid": 154,
            "code": 1307
          }
        ]
      },
      {
        "name": "焦作",
        "pid": 11,
        "code": 155,
        "sub": [
          {
            "name": "解放区",
            "pid": 155,
            "code": 1308
          },
          {
            "name": "中站区",
            "pid": 155,
            "code": 1309
          },
          {
            "name": "马村区",
            "pid": 155,
            "code": 1310
          },
          {
            "name": "山阳区",
            "pid": 155,
            "code": 1311
          },
          {
            "name": "沁阳市",
            "pid": 155,
            "code": 1312
          },
          {
            "name": "孟州市",
            "pid": 155,
            "code": 1313
          },
          {
            "name": "修武县",
            "pid": 155,
            "code": 1314
          },
          {
            "name": "博爱县",
            "pid": 155,
            "code": 1315
          },
          {
            "name": "武陟县",
            "pid": 155,
            "code": 1316
          },
          {
            "name": "温县",
            "pid": 155,
            "code": 1317
          }
        ]
      },
      {
        "name": "南阳",
        "pid": 11,
        "code": 156,
        "sub": [
          {
            "name": "卧龙区",
            "pid": 156,
            "code": 1318
          },
          {
            "name": "宛城区",
            "pid": 156,
            "code": 1319
          },
          {
            "name": "邓州市",
            "pid": 156,
            "code": 1320
          },
          {
            "name": "南召县",
            "pid": 156,
            "code": 1321
          },
          {
            "name": "方城县",
            "pid": 156,
            "code": 1322
          },
          {
            "name": "西峡县",
            "pid": 156,
            "code": 1323
          },
          {
            "name": "镇平县",
            "pid": 156,
            "code": 1324
          },
          {
            "name": "内乡县",
            "pid": 156,
            "code": 1325
          },
          {
            "name": "淅川县",
            "pid": 156,
            "code": 1326
          },
          {
            "name": "社旗县",
            "pid": 156,
            "code": 1327
          },
          {
            "name": "唐河县",
            "pid": 156,
            "code": 1328
          },
          {
            "name": "新野县",
            "pid": 156,
            "code": 1329
          },
          {
            "name": "桐柏县",
            "pid": 156,
            "code": 1330
          }
        ]
      },
      {
        "name": "平顶山",
        "pid": 11,
        "code": 157,
        "sub": [
          {
            "name": "新华区",
            "pid": 157,
            "code": 1331
          },
          {
            "name": "卫东区",
            "pid": 157,
            "code": 1332
          },
          {
            "name": "湛河区",
            "pid": 157,
            "code": 1333
          },
          {
            "name": "石龙区",
            "pid": 157,
            "code": 1334
          },
          {
            "name": "舞钢市",
            "pid": 157,
            "code": 1335
          },
          {
            "name": "汝州市",
            "pid": 157,
            "code": 1336
          },
          {
            "name": "宝丰县",
            "pid": 157,
            "code": 1337
          },
          {
            "name": "叶县",
            "pid": 157,
            "code": 1338
          },
          {
            "name": "鲁山县",
            "pid": 157,
            "code": 1339
          },
          {
            "name": "郏县",
            "pid": 157,
            "code": 1340
          }
        ]
      },
      {
        "name": "三门峡",
        "pid": 11,
        "code": 158,
        "sub": [
          {
            "name": "湖滨区",
            "pid": 158,
            "code": 1341
          },
          {
            "name": "义马市",
            "pid": 158,
            "code": 1342
          },
          {
            "name": "灵宝市",
            "pid": 158,
            "code": 1343
          },
          {
            "name": "渑池县",
            "pid": 158,
            "code": 1344
          },
          {
            "name": "陕县",
            "pid": 158,
            "code": 1345
          },
          {
            "name": "卢氏县",
            "pid": 158,
            "code": 1346
          }
        ]
      },
      {
        "name": "商丘",
        "pid": 11,
        "code": 159,
        "sub": [
          {
            "name": "梁园区",
            "pid": 159,
            "code": 1347
          },
          {
            "name": "睢阳区",
            "pid": 159,
            "code": 1348
          },
          {
            "name": "永城市",
            "pid": 159,
            "code": 1349
          },
          {
            "name": "民权县",
            "pid": 159,
            "code": 1350
          },
          {
            "name": "睢县",
            "pid": 159,
            "code": 1351
          },
          {
            "name": "宁陵县",
            "pid": 159,
            "code": 1352
          },
          {
            "name": "虞城县",
            "pid": 159,
            "code": 1353
          },
          {
            "name": "柘城县",
            "pid": 159,
            "code": 1354
          },
          {
            "name": "夏邑县",
            "pid": 159,
            "code": 1355
          }
        ]
      },
      {
        "name": "新乡",
        "pid": 11,
        "code": 160,
        "sub": [
          {
            "name": "卫滨区",
            "pid": 160,
            "code": 1356
          },
          {
            "name": "红旗区",
            "pid": 160,
            "code": 1357
          },
          {
            "name": "凤泉区",
            "pid": 160,
            "code": 1358
          },
          {
            "name": "牧野区",
            "pid": 160,
            "code": 1359
          },
          {
            "name": "卫辉市",
            "pid": 160,
            "code": 1360
          },
          {
            "name": "辉县市",
            "pid": 160,
            "code": 1361
          },
          {
            "name": "新乡县",
            "pid": 160,
            "code": 1362
          },
          {
            "name": "获嘉县",
            "pid": 160,
            "code": 1363
          },
          {
            "name": "原阳县",
            "pid": 160,
            "code": 1364
          },
          {
            "name": "延津县",
            "pid": 160,
            "code": 1365
          },
          {
            "name": "封丘县",
            "pid": 160,
            "code": 1366
          },
          {
            "name": "长垣县",
            "pid": 160,
            "code": 1367
          }
        ]
      },
      {
        "name": "信阳",
        "pid": 11,
        "code": 161,
        "sub": [
          {
            "name": "浉河区",
            "pid": 161,
            "code": 1368
          },
          {
            "name": "平桥区",
            "pid": 161,
            "code": 1369
          },
          {
            "name": "罗山县",
            "pid": 161,
            "code": 1370
          },
          {
            "name": "光山县",
            "pid": 161,
            "code": 1371
          },
          {
            "name": "新县",
            "pid": 161,
            "code": 1372
          },
          {
            "name": "商城县",
            "pid": 161,
            "code": 1373
          },
          {
            "name": "固始县",
            "pid": 161,
            "code": 1374
          },
          {
            "name": "潢川县",
            "pid": 161,
            "code": 1375
          },
          {
            "name": "淮滨县",
            "pid": 161,
            "code": 1376
          },
          {
            "name": "息县",
            "pid": 161,
            "code": 1377
          }
        ]
      },
      {
        "name": "许昌",
        "pid": 11,
        "code": 162,
        "sub": [
          {
            "name": "魏都区",
            "pid": 162,
            "code": 1378
          },
          {
            "name": "禹州市",
            "pid": 162,
            "code": 1379
          },
          {
            "name": "长葛市",
            "pid": 162,
            "code": 1380
          },
          {
            "name": "许昌县",
            "pid": 162,
            "code": 1381
          },
          {
            "name": "鄢陵县",
            "pid": 162,
            "code": 1382
          },
          {
            "name": "襄城县",
            "pid": 162,
            "code": 1383
          }
        ]
      },
      {
        "name": "周口",
        "pid": 11,
        "code": 163,
        "sub": [
          {
            "name": "川汇区",
            "pid": 163,
            "code": 1384
          },
          {
            "name": "项城市",
            "pid": 163,
            "code": 1385
          },
          {
            "name": "扶沟县",
            "pid": 163,
            "code": 1386
          },
          {
            "name": "西华县",
            "pid": 163,
            "code": 1387
          },
          {
            "name": "商水县",
            "pid": 163,
            "code": 1388
          },
          {
            "name": "沈丘县",
            "pid": 163,
            "code": 1389
          },
          {
            "name": "郸城县",
            "pid": 163,
            "code": 1390
          },
          {
            "name": "淮阳县",
            "pid": 163,
            "code": 1391
          },
          {
            "name": "太康县",
            "pid": 163,
            "code": 1392
          },
          {
            "name": "鹿邑县",
            "pid": 163,
            "code": 1393
          }
        ]
      },
      {
        "name": "驻马店",
        "pid": 11,
        "code": 164,
        "sub": [
          {
            "name": "驿城区",
            "pid": 164,
            "code": 1394
          },
          {
            "name": "西平县",
            "pid": 164,
            "code": 1395
          },
          {
            "name": "上蔡县",
            "pid": 164,
            "code": 1396
          },
          {
            "name": "平舆县",
            "pid": 164,
            "code": 1397
          },
          {
            "name": "正阳县",
            "pid": 164,
            "code": 1398
          },
          {
            "name": "确山县",
            "pid": 164,
            "code": 1399
          },
          {
            "name": "泌阳县",
            "pid": 164,
            "code": 1400
          },
          {
            "name": "汝南县",
            "pid": 164,
            "code": 1401
          },
          {
            "name": "遂平县",
            "pid": 164,
            "code": 1402
          },
          {
            "name": "新蔡县",
            "pid": 164,
            "code": 1403
          }
        ]
      },
      {
        "name": "漯河",
        "pid": 11,
        "code": 165,
        "sub": [
          {
            "name": "郾城区",
            "pid": 165,
            "code": 1404
          },
          {
            "name": "源汇区",
            "pid": 165,
            "code": 1405
          },
          {
            "name": "召陵区",
            "pid": 165,
            "code": 1406
          },
          {
            "name": "舞阳县",
            "pid": 165,
            "code": 1407
          },
          {
            "name": "临颍县",
            "pid": 165,
            "code": 1408
          }
        ]
      },
      {
        "name": "濮阳",
        "pid": 11,
        "code": 166,
        "sub": [
          {
            "name": "华龙区",
            "pid": 166,
            "code": 1409
          },
          {
            "name": "清丰县",
            "pid": 166,
            "code": 1410
          },
          {
            "name": "南乐县",
            "pid": 166,
            "code": 1411
          },
          {
            "name": "范县",
            "pid": 166,
            "code": 1412
          },
          {
            "name": "台前县",
            "pid": 166,
            "code": 1413
          },
          {
            "name": "濮阳县",
            "pid": 166,
            "code": 1414
          }
        ]
      }
    ]
  },
  {
    "name": "黑龙江",
    "code": 12,
    "sub": [
      {
        "name": "哈尔滨",
        "pid": 12,
        "code": 167,
        "sub": [
          {
            "name": "道里区",
            "pid": 167,
            "code": 1415
          },
          {
            "name": "南岗区",
            "pid": 167,
            "code": 1416
          },
          {
            "name": "动力区",
            "pid": 167,
            "code": 1417
          },
          {
            "name": "平房区",
            "pid": 167,
            "code": 1418
          },
          {
            "name": "香坊区",
            "pid": 167,
            "code": 1419
          },
          {
            "name": "太平区",
            "pid": 167,
            "code": 1420
          },
          {
            "name": "道外区",
            "pid": 167,
            "code": 1421
          },
          {
            "name": "阿城区",
            "pid": 167,
            "code": 1422
          },
          {
            "name": "呼兰区",
            "pid": 167,
            "code": 1423
          },
          {
            "name": "松北区",
            "pid": 167,
            "code": 1424
          },
          {
            "name": "尚志市",
            "pid": 167,
            "code": 1425
          },
          {
            "name": "双城市",
            "pid": 167,
            "code": 1426
          },
          {
            "name": "五常市",
            "pid": 167,
            "code": 1427
          },
          {
            "name": "方正县",
            "pid": 167,
            "code": 1428
          },
          {
            "name": "宾县",
            "pid": 167,
            "code": 1429
          },
          {
            "name": "依兰县",
            "pid": 167,
            "code": 1430
          },
          {
            "name": "巴彦县",
            "pid": 167,
            "code": 1431
          },
          {
            "name": "通河县",
            "pid": 167,
            "code": 1432
          },
          {
            "name": "木兰县",
            "pid": 167,
            "code": 1433
          },
          {
            "name": "延寿县",
            "pid": 167,
            "code": 1434
          }
        ]
      },
      {
        "name": "大庆",
        "pid": 12,
        "code": 168,
        "sub": [
          {
            "name": "萨尔图区",
            "pid": 168,
            "code": 1435
          },
          {
            "name": "红岗区",
            "pid": 168,
            "code": 1436
          },
          {
            "name": "龙凤区",
            "pid": 168,
            "code": 1437
          },
          {
            "name": "让胡路区",
            "pid": 168,
            "code": 1438
          },
          {
            "name": "大同区",
            "pid": 168,
            "code": 1439
          },
          {
            "name": "肇州县",
            "pid": 168,
            "code": 1440
          },
          {
            "name": "肇源县",
            "pid": 168,
            "code": 1441
          },
          {
            "name": "林甸县",
            "pid": 168,
            "code": 1442
          },
          {
            "name": "杜尔伯特",
            "pid": 168,
            "code": 1443
          }
        ]
      },
      {
        "name": "大兴安岭",
        "pid": 12,
        "code": 169,
        "sub": [
          {
            "name": "呼玛县",
            "pid": 169,
            "code": 1444
          },
          {
            "name": "漠河县",
            "pid": 169,
            "code": 1445
          },
          {
            "name": "塔河县",
            "pid": 169,
            "code": 1446
          }
        ]
      },
      {
        "name": "鹤岗",
        "pid": 12,
        "code": 170,
        "sub": [
          {
            "name": "兴山区",
            "pid": 170,
            "code": 1447
          },
          {
            "name": "工农区",
            "pid": 170,
            "code": 1448
          },
          {
            "name": "南山区",
            "pid": 170,
            "code": 1449
          },
          {
            "name": "兴安区",
            "pid": 170,
            "code": 1450
          },
          {
            "name": "向阳区",
            "pid": 170,
            "code": 1451
          },
          {
            "name": "东山区",
            "pid": 170,
            "code": 1452
          },
          {
            "name": "萝北县",
            "pid": 170,
            "code": 1453
          },
          {
            "name": "绥滨县",
            "pid": 170,
            "code": 1454
          }
        ]
      },
      {
        "name": "黑河",
        "pid": 12,
        "code": 171,
        "sub": [
          {
            "name": "爱辉区",
            "pid": 171,
            "code": 1455
          },
          {
            "name": "五大连池市",
            "pid": 171,
            "code": 1456
          },
          {
            "name": "北安市",
            "pid": 171,
            "code": 1457
          },
          {
            "name": "嫩江县",
            "pid": 171,
            "code": 1458
          },
          {
            "name": "逊克县",
            "pid": 171,
            "code": 1459
          },
          {
            "name": "孙吴县",
            "pid": 171,
            "code": 1460
          }
        ]
      },
      {
        "name": "鸡西",
        "pid": 12,
        "code": 172,
        "sub": [
          {
            "name": "鸡冠区",
            "pid": 172,
            "code": 1461
          },
          {
            "name": "恒山区",
            "pid": 172,
            "code": 1462
          },
          {
            "name": "城子河区",
            "pid": 172,
            "code": 1463
          },
          {
            "name": "滴道区",
            "pid": 172,
            "code": 1464
          },
          {
            "name": "梨树区",
            "pid": 172,
            "code": 1465
          },
          {
            "name": "虎林市",
            "pid": 172,
            "code": 1466
          },
          {
            "name": "密山市",
            "pid": 172,
            "code": 1467
          },
          {
            "name": "鸡东县",
            "pid": 172,
            "code": 1468
          }
        ]
      },
      {
        "name": "佳木斯",
        "pid": 12,
        "code": 173,
        "sub": [
          {
            "name": "前进区",
            "pid": 173,
            "code": 1469
          },
          {
            "name": "郊区",
            "pid": 173,
            "code": 1470
          },
          {
            "name": "向阳区",
            "pid": 173,
            "code": 1471
          },
          {
            "name": "东风区",
            "pid": 173,
            "code": 1472
          },
          {
            "name": "同江市",
            "pid": 173,
            "code": 1473
          },
          {
            "name": "富锦市",
            "pid": 173,
            "code": 1474
          },
          {
            "name": "桦南县",
            "pid": 173,
            "code": 1475
          },
          {
            "name": "桦川县",
            "pid": 173,
            "code": 1476
          },
          {
            "name": "汤原县",
            "pid": 173,
            "code": 1477
          },
          {
            "name": "抚远县",
            "pid": 173,
            "code": 1478
          }
        ]
      },
      {
        "name": "牡丹江",
        "pid": 12,
        "code": 174,
        "sub": [
          {
            "name": "爱民区",
            "pid": 174,
            "code": 1479
          },
          {
            "name": "东安区",
            "pid": 174,
            "code": 1480
          },
          {
            "name": "阳明区",
            "pid": 174,
            "code": 1481
          },
          {
            "name": "西安区",
            "pid": 174,
            "code": 1482
          },
          {
            "name": "绥芬河市",
            "pid": 174,
            "code": 1483
          },
          {
            "name": "海林市",
            "pid": 174,
            "code": 1484
          },
          {
            "name": "宁安市",
            "pid": 174,
            "code": 1485
          },
          {
            "name": "穆棱市",
            "pid": 174,
            "code": 1486
          },
          {
            "name": "东宁县",
            "pid": 174,
            "code": 1487
          },
          {
            "name": "林口县",
            "pid": 174,
            "code": 1488
          }
        ]
      },
      {
        "name": "七台河",
        "pid": 12,
        "code": 175,
        "sub": [
          {
            "name": "桃山区",
            "pid": 175,
            "code": 1489
          },
          {
            "name": "新兴区",
            "pid": 175,
            "code": 1490
          },
          {
            "name": "茄子河区",
            "pid": 175,
            "code": 1491
          },
          {
            "name": "勃利县",
            "pid": 175,
            "code": 1492
          }
        ]
      },
      {
        "name": "齐齐哈尔",
        "pid": 12,
        "code": 176,
        "sub": [
          {
            "name": "龙沙区",
            "pid": 176,
            "code": 1493
          },
          {
            "name": "昂昂溪区",
            "pid": 176,
            "code": 1494
          },
          {
            "name": "铁峰区",
            "pid": 176,
            "code": 1495
          },
          {
            "name": "建华区",
            "pid": 176,
            "code": 1496
          },
          {
            "name": "富拉尔基区",
            "pid": 176,
            "code": 1497
          },
          {
            "name": "碾子山区",
            "pid": 176,
            "code": 1498
          },
          {
            "name": "梅里斯达斡尔区",
            "pid": 176,
            "code": 1499
          },
          {
            "name": "讷河市",
            "pid": 176,
            "code": 1500
          },
          {
            "name": "龙江县",
            "pid": 176,
            "code": 1501
          },
          {
            "name": "依安县",
            "pid": 176,
            "code": 1502
          },
          {
            "name": "泰来县",
            "pid": 176,
            "code": 1503
          },
          {
            "name": "甘南县",
            "pid": 176,
            "code": 1504
          },
          {
            "name": "富裕县",
            "pid": 176,
            "code": 1505
          },
          {
            "name": "克山县",
            "pid": 176,
            "code": 1506
          },
          {
            "name": "克东县",
            "pid": 176,
            "code": 1507
          },
          {
            "name": "拜泉县",
            "pid": 176,
            "code": 1508
          }
        ]
      },
      {
        "name": "双鸭山",
        "pid": 12,
        "code": 177,
        "sub": [
          {
            "name": "尖山区",
            "pid": 177,
            "code": 1509
          },
          {
            "name": "岭东区",
            "pid": 177,
            "code": 1510
          },
          {
            "name": "四方台区",
            "pid": 177,
            "code": 1511
          },
          {
            "name": "宝山区",
            "pid": 177,
            "code": 1512
          },
          {
            "name": "集贤县",
            "pid": 177,
            "code": 1513
          },
          {
            "name": "友谊县",
            "pid": 177,
            "code": 1514
          },
          {
            "name": "宝清县",
            "pid": 177,
            "code": 1515
          },
          {
            "name": "饶河县",
            "pid": 177,
            "code": 1516
          }
        ]
      },
      {
        "name": "绥化",
        "pid": 12,
        "code": 178,
        "sub": [
          {
            "name": "北林区",
            "pid": 178,
            "code": 1517
          },
          {
            "name": "安达市",
            "pid": 178,
            "code": 1518
          },
          {
            "name": "肇东市",
            "pid": 178,
            "code": 1519
          },
          {
            "name": "海伦市",
            "pid": 178,
            "code": 1520
          },
          {
            "name": "望奎县",
            "pid": 178,
            "code": 1521
          },
          {
            "name": "兰西县",
            "pid": 178,
            "code": 1522
          },
          {
            "name": "青冈县",
            "pid": 178,
            "code": 1523
          },
          {
            "name": "庆安县",
            "pid": 178,
            "code": 1524
          },
          {
            "name": "明水县",
            "pid": 178,
            "code": 1525
          },
          {
            "name": "绥棱县",
            "pid": 178,
            "code": 1526
          }
        ]
      },
      {
        "name": "伊春",
        "pid": 12,
        "code": 179,
        "sub": [
          {
            "name": "伊春区",
            "pid": 179,
            "code": 1527
          },
          {
            "name": "带岭区",
            "pid": 179,
            "code": 1528
          },
          {
            "name": "南岔区",
            "pid": 179,
            "code": 1529
          },
          {
            "name": "金山屯区",
            "pid": 179,
            "code": 1530
          },
          {
            "name": "西林区",
            "pid": 179,
            "code": 1531
          },
          {
            "name": "美溪区",
            "pid": 179,
            "code": 1532
          },
          {
            "name": "乌马河区",
            "pid": 179,
            "code": 1533
          },
          {
            "name": "翠峦区",
            "pid": 179,
            "code": 1534
          },
          {
            "name": "友好区",
            "pid": 179,
            "code": 1535
          },
          {
            "name": "上甘岭区",
            "pid": 179,
            "code": 1536
          },
          {
            "name": "五营区",
            "pid": 179,
            "code": 1537
          },
          {
            "name": "红星区",
            "pid": 179,
            "code": 1538
          },
          {
            "name": "新青区",
            "pid": 179,
            "code": 1539
          },
          {
            "name": "汤旺河区",
            "pid": 179,
            "code": 1540
          },
          {
            "name": "乌伊岭区",
            "pid": 179,
            "code": 1541
          },
          {
            "name": "铁力市",
            "pid": 179,
            "code": 1542
          },
          {
            "name": "嘉荫县",
            "pid": 179,
            "code": 1543
          }
        ]
      }
    ]
  },
  {
    "name": "湖北",
    "code": 13,
    "sub": [
      {
        "name": "武汉",
        "pid": 13,
        "code": 180,
        "sub": [
          {
            "name": "江岸区",
            "pid": 180,
            "code": 1544
          },
          {
            "name": "武昌区",
            "pid": 180,
            "code": 1545
          },
          {
            "name": "江汉区",
            "pid": 180,
            "code": 1546
          },
          {
            "name": "硚口区",
            "pid": 180,
            "code": 1547
          },
          {
            "name": "汉阳区",
            "pid": 180,
            "code": 1548
          },
          {
            "name": "青山区",
            "pid": 180,
            "code": 1549
          },
          {
            "name": "洪山区",
            "pid": 180,
            "code": 1550
          },
          {
            "name": "东西湖区",
            "pid": 180,
            "code": 1551
          },
          {
            "name": "汉南区",
            "pid": 180,
            "code": 1552
          },
          {
            "name": "蔡甸区",
            "pid": 180,
            "code": 1553
          },
          {
            "name": "江夏区",
            "pid": 180,
            "code": 1554
          },
          {
            "name": "黄陂区",
            "pid": 180,
            "code": 1555
          },
          {
            "name": "新洲区",
            "pid": 180,
            "code": 1556
          },
          {
            "name": "经济开发区",
            "pid": 180,
            "code": 1557
          }
        ]
      },
      {
        "name": "仙桃",
        "pid": 13,
        "code": 181,
        "sub": [
          {
            "name": "仙桃市",
            "pid": 181,
            "code": 1558
          }
        ]
      },
      {
        "name": "鄂州",
        "pid": 13,
        "code": 182,
        "sub": [
          {
            "name": "鄂城区",
            "pid": 182,
            "code": 1559
          },
          {
            "name": "华容区",
            "pid": 182,
            "code": 1560
          },
          {
            "name": "梁子湖区",
            "pid": 182,
            "code": 1561
          }
        ]
      },
      {
        "name": "黄冈",
        "pid": 13,
        "code": 183,
        "sub": [
          {
            "name": "黄州区",
            "pid": 183,
            "code": 1562
          },
          {
            "name": "麻城市",
            "pid": 183,
            "code": 1563
          },
          {
            "name": "武穴市",
            "pid": 183,
            "code": 1564
          },
          {
            "name": "团风县",
            "pid": 183,
            "code": 1565
          },
          {
            "name": "红安县",
            "pid": 183,
            "code": 1566
          },
          {
            "name": "罗田县",
            "pid": 183,
            "code": 1567
          },
          {
            "name": "英山县",
            "pid": 183,
            "code": 1568
          },
          {
            "name": "浠水县",
            "pid": 183,
            "code": 1569
          },
          {
            "name": "蕲春县",
            "pid": 183,
            "code": 1570
          },
          {
            "name": "黄梅县",
            "pid": 183,
            "code": 1571
          }
        ]
      },
      {
        "name": "黄石",
        "pid": 13,
        "code": 184,
        "sub": [
          {
            "name": "黄石港区",
            "pid": 184,
            "code": 1572
          },
          {
            "name": "西塞山区",
            "pid": 184,
            "code": 1573
          },
          {
            "name": "下陆区",
            "pid": 184,
            "code": 1574
          },
          {
            "name": "铁山区",
            "pid": 184,
            "code": 1575
          },
          {
            "name": "大冶市",
            "pid": 184,
            "code": 1576
          },
          {
            "name": "阳新县",
            "pid": 184,
            "code": 1577
          }
        ]
      },
      {
        "name": "荆门",
        "pid": 13,
        "code": 185,
        "sub": [
          {
            "name": "东宝区",
            "pid": 185,
            "code": 1578
          },
          {
            "name": "掇刀区",
            "pid": 185,
            "code": 1579
          },
          {
            "name": "钟祥市",
            "pid": 185,
            "code": 1580
          },
          {
            "name": "京山县",
            "pid": 185,
            "code": 1581
          },
          {
            "name": "沙洋县",
            "pid": 185,
            "code": 1582
          }
        ]
      },
      {
        "name": "荆州",
        "pid": 13,
        "code": 186,
        "sub": [
          {
            "name": "沙市区",
            "pid": 186,
            "code": 1583
          },
          {
            "name": "荆州区",
            "pid": 186,
            "code": 1584
          },
          {
            "name": "石首市",
            "pid": 186,
            "code": 1585
          },
          {
            "name": "洪湖市",
            "pid": 186,
            "code": 1586
          },
          {
            "name": "松滋市",
            "pid": 186,
            "code": 1587
          },
          {
            "name": "公安县",
            "pid": 186,
            "code": 1588
          },
          {
            "name": "监利县",
            "pid": 186,
            "code": 1589
          },
          {
            "name": "江陵县",
            "pid": 186,
            "code": 1590
          }
        ]
      },
      {
        "name": "潜江",
        "pid": 13,
        "code": 187,
        "sub": [
          {
            "name": "潜江市",
            "pid": 187,
            "code": 1591
          }
        ]
      },
      {
        "name": "神农架林区",
        "pid": 13,
        "code": 188,
        "sub": [
          {
            "name": "神农架林区",
            "pid": 188,
            "code": 1592
          }
        ]
      },
      {
        "name": "十堰",
        "pid": 13,
        "code": 189,
        "sub": [
          {
            "name": "张湾区",
            "pid": 189,
            "code": 1593
          },
          {
            "name": "茅箭区",
            "pid": 189,
            "code": 1594
          },
          {
            "name": "丹江口市",
            "pid": 189,
            "code": 1595
          },
          {
            "name": "郧县",
            "pid": 189,
            "code": 1596
          },
          {
            "name": "郧西县",
            "pid": 189,
            "code": 1597
          },
          {
            "name": "竹山县",
            "pid": 189,
            "code": 1598
          },
          {
            "name": "竹溪县",
            "pid": 189,
            "code": 1599
          },
          {
            "name": "房县",
            "pid": 189,
            "code": 1600
          }
        ]
      },
      {
        "name": "随州",
        "pid": 13,
        "code": 190,
        "sub": [
          {
            "name": "曾都区",
            "pid": 190,
            "code": 1601
          },
          {
            "name": "广水市",
            "pid": 190,
            "code": 1602
          }
        ]
      },
      {
        "name": "天门",
        "pid": 13,
        "code": 191,
        "sub": [
          {
            "name": "天门市",
            "pid": 191,
            "code": 1603
          }
        ]
      },
      {
        "name": "咸宁",
        "pid": 13,
        "code": 192,
        "sub": [
          {
            "name": "咸安区",
            "pid": 192,
            "code": 1604
          },
          {
            "name": "赤壁市",
            "pid": 192,
            "code": 1605
          },
          {
            "name": "嘉鱼县",
            "pid": 192,
            "code": 1606
          },
          {
            "name": "通城县",
            "pid": 192,
            "code": 1607
          },
          {
            "name": "崇阳县",
            "pid": 192,
            "code": 1608
          },
          {
            "name": "通山县",
            "pid": 192,
            "code": 1609
          }
        ]
      },
      {
        "name": "襄樊",
        "pid": 13,
        "code": 193,
        "sub": [
          {
            "name": "襄城区",
            "pid": 193,
            "code": 1610
          },
          {
            "name": "樊城区",
            "pid": 193,
            "code": 1611
          },
          {
            "name": "襄阳区",
            "pid": 193,
            "code": 1612
          },
          {
            "name": "老河口市",
            "pid": 193,
            "code": 1613
          },
          {
            "name": "枣阳市",
            "pid": 193,
            "code": 1614
          },
          {
            "name": "宜城市",
            "pid": 193,
            "code": 1615
          },
          {
            "name": "南漳县",
            "pid": 193,
            "code": 1616
          },
          {
            "name": "谷城县",
            "pid": 193,
            "code": 1617
          },
          {
            "name": "保康县",
            "pid": 193,
            "code": 1618
          }
        ]
      },
      {
        "name": "孝感",
        "pid": 13,
        "code": 194,
        "sub": [
          {
            "name": "孝南区",
            "pid": 194,
            "code": 1619
          },
          {
            "name": "应城市",
            "pid": 194,
            "code": 1620
          },
          {
            "name": "安陆市",
            "pid": 194,
            "code": 1621
          },
          {
            "name": "汉川市",
            "pid": 194,
            "code": 1622
          },
          {
            "name": "孝昌县",
            "pid": 194,
            "code": 1623
          },
          {
            "name": "大悟县",
            "pid": 194,
            "code": 1624
          },
          {
            "name": "云梦县",
            "pid": 194,
            "code": 1625
          }
        ]
      },
      {
        "name": "宜昌",
        "pid": 13,
        "code": 195,
        "sub": [
          {
            "name": "长阳",
            "pid": 195,
            "code": 1626
          },
          {
            "name": "五峰",
            "pid": 195,
            "code": 1627
          },
          {
            "name": "西陵区",
            "pid": 195,
            "code": 1628
          },
          {
            "name": "伍家岗区",
            "pid": 195,
            "code": 1629
          },
          {
            "name": "点军区",
            "pid": 195,
            "code": 1630
          },
          {
            "name": "猇亭区",
            "pid": 195,
            "code": 1631
          },
          {
            "name": "夷陵区",
            "pid": 195,
            "code": 1632
          },
          {
            "name": "宜都市",
            "pid": 195,
            "code": 1633
          },
          {
            "name": "当阳市",
            "pid": 195,
            "code": 1634
          },
          {
            "name": "枝江市",
            "pid": 195,
            "code": 1635
          },
          {
            "name": "远安县",
            "pid": 195,
            "code": 1636
          },
          {
            "name": "兴山县",
            "pid": 195,
            "code": 1637
          },
          {
            "name": "秭归县",
            "pid": 195,
            "code": 1638
          }
        ]
      },
      {
        "name": "恩施",
        "pid": 13,
        "code": 196,
        "sub": [
          {
            "name": "恩施市",
            "pid": 196,
            "code": 1639
          },
          {
            "name": "利川市",
            "pid": 196,
            "code": 1640
          },
          {
            "name": "建始县",
            "pid": 196,
            "code": 1641
          },
          {
            "name": "巴东县",
            "pid": 196,
            "code": 1642
          },
          {
            "name": "宣恩县",
            "pid": 196,
            "code": 1643
          },
          {
            "name": "咸丰县",
            "pid": 196,
            "code": 1644
          },
          {
            "name": "来凤县",
            "pid": 196,
            "code": 1645
          },
          {
            "name": "鹤峰县",
            "pid": 196,
            "code": 1646
          }
        ]
      }
    ]
  },
  {
    "name": "湖南",
    "code": 14,
    "sub": [
      {
        "name": "长沙",
        "pid": 14,
        "code": 197,
        "sub": [
          {
            "name": "岳麓区",
            "pid": 197,
            "code": 1647
          },
          {
            "name": "芙蓉区",
            "pid": 197,
            "code": 1648
          },
          {
            "name": "天心区",
            "pid": 197,
            "code": 1649
          },
          {
            "name": "开福区",
            "pid": 197,
            "code": 1650
          },
          {
            "name": "雨花区",
            "pid": 197,
            "code": 1651
          },
          {
            "name": "开发区",
            "pid": 197,
            "code": 1652
          },
          {
            "name": "浏阳市",
            "pid": 197,
            "code": 1653
          },
          {
            "name": "长沙县",
            "pid": 197,
            "code": 1654
          },
          {
            "name": "望城县",
            "pid": 197,
            "code": 1655
          },
          {
            "name": "宁乡县",
            "pid": 197,
            "code": 1656
          }
        ]
      },
      {
        "name": "张家界",
        "pid": 14,
        "code": 198,
        "sub": [
          {
            "name": "永定区",
            "pid": 198,
            "code": 1657
          },
          {
            "name": "武陵源区",
            "pid": 198,
            "code": 1658
          },
          {
            "name": "慈利县",
            "pid": 198,
            "code": 1659
          },
          {
            "name": "桑植县",
            "pid": 198,
            "code": 1660
          }
        ]
      },
      {
        "name": "常德",
        "pid": 14,
        "code": 199,
        "sub": [
          {
            "name": "武陵区",
            "pid": 199,
            "code": 1661
          },
          {
            "name": "鼎城区",
            "pid": 199,
            "code": 1662
          },
          {
            "name": "津市市",
            "pid": 199,
            "code": 1663
          },
          {
            "name": "安乡县",
            "pid": 199,
            "code": 1664
          },
          {
            "name": "汉寿县",
            "pid": 199,
            "code": 1665
          },
          {
            "name": "澧县",
            "pid": 199,
            "code": 1666
          },
          {
            "name": "临澧县",
            "pid": 199,
            "code": 1667
          },
          {
            "name": "桃源县",
            "pid": 199,
            "code": 1668
          },
          {
            "name": "石门县",
            "pid": 199,
            "code": 1669
          }
        ]
      },
      {
        "name": "郴州",
        "pid": 14,
        "code": 200,
        "sub": [
          {
            "name": "北湖区",
            "pid": 200,
            "code": 1670
          },
          {
            "name": "苏仙区",
            "pid": 200,
            "code": 1671
          },
          {
            "name": "资兴市",
            "pid": 200,
            "code": 1672
          },
          {
            "name": "桂阳县",
            "pid": 200,
            "code": 1673
          },
          {
            "name": "宜章县",
            "pid": 200,
            "code": 1674
          },
          {
            "name": "永兴县",
            "pid": 200,
            "code": 1675
          },
          {
            "name": "嘉禾县",
            "pid": 200,
            "code": 1676
          },
          {
            "name": "临武县",
            "pid": 200,
            "code": 1677
          },
          {
            "name": "汝城县",
            "pid": 200,
            "code": 1678
          },
          {
            "name": "桂东县",
            "pid": 200,
            "code": 1679
          },
          {
            "name": "安仁县",
            "pid": 200,
            "code": 1680
          }
        ]
      },
      {
        "name": "衡阳",
        "pid": 14,
        "code": 201,
        "sub": [
          {
            "name": "雁峰区",
            "pid": 201,
            "code": 1681
          },
          {
            "name": "珠晖区",
            "pid": 201,
            "code": 1682
          },
          {
            "name": "石鼓区",
            "pid": 201,
            "code": 1683
          },
          {
            "name": "蒸湘区",
            "pid": 201,
            "code": 1684
          },
          {
            "name": "南岳区",
            "pid": 201,
            "code": 1685
          },
          {
            "name": "耒阳市",
            "pid": 201,
            "code": 1686
          },
          {
            "name": "常宁市",
            "pid": 201,
            "code": 1687
          },
          {
            "name": "衡阳县",
            "pid": 201,
            "code": 1688
          },
          {
            "name": "衡南县",
            "pid": 201,
            "code": 1689
          },
          {
            "name": "衡山县",
            "pid": 201,
            "code": 1690
          },
          {
            "name": "衡东县",
            "pid": 201,
            "code": 1691
          },
          {
            "name": "祁东县",
            "pid": 201,
            "code": 1692
          }
        ]
      },
      {
        "name": "怀化",
        "pid": 14,
        "code": 202,
        "sub": [
          {
            "name": "鹤城区",
            "pid": 202,
            "code": 1693
          },
          {
            "name": "靖州",
            "pid": 202,
            "code": 1694
          },
          {
            "name": "麻阳",
            "pid": 202,
            "code": 1695
          },
          {
            "name": "通道",
            "pid": 202,
            "code": 1696
          },
          {
            "name": "新晃",
            "pid": 202,
            "code": 1697
          },
          {
            "name": "芷江",
            "pid": 202,
            "code": 1698
          },
          {
            "name": "沅陵县",
            "pid": 202,
            "code": 1699
          },
          {
            "name": "辰溪县",
            "pid": 202,
            "code": 1700
          },
          {
            "name": "溆浦县",
            "pid": 202,
            "code": 1701
          },
          {
            "name": "中方县",
            "pid": 202,
            "code": 1702
          },
          {
            "name": "会同县",
            "pid": 202,
            "code": 1703
          },
          {
            "name": "洪江市",
            "pid": 202,
            "code": 1704
          }
        ]
      },
      {
        "name": "娄底",
        "pid": 14,
        "code": 203,
        "sub": [
          {
            "name": "娄星区",
            "pid": 203,
            "code": 1705
          },
          {
            "name": "冷水江市",
            "pid": 203,
            "code": 1706
          },
          {
            "name": "涟源市",
            "pid": 203,
            "code": 1707
          },
          {
            "name": "双峰县",
            "pid": 203,
            "code": 1708
          },
          {
            "name": "新化县",
            "pid": 203,
            "code": 1709
          }
        ]
      },
      {
        "name": "邵阳",
        "pid": 14,
        "code": 204,
        "sub": [
          {
            "name": "城步",
            "pid": 204,
            "code": 1710
          },
          {
            "name": "双清区",
            "pid": 204,
            "code": 1711
          },
          {
            "name": "大祥区",
            "pid": 204,
            "code": 1712
          },
          {
            "name": "北塔区",
            "pid": 204,
            "code": 1713
          },
          {
            "name": "武冈市",
            "pid": 204,
            "code": 1714
          },
          {
            "name": "邵东县",
            "pid": 204,
            "code": 1715
          },
          {
            "name": "新邵县",
            "pid": 204,
            "code": 1716
          },
          {
            "name": "邵阳县",
            "pid": 204,
            "code": 1717
          },
          {
            "name": "隆回县",
            "pid": 204,
            "code": 1718
          },
          {
            "name": "洞口县",
            "pid": 204,
            "code": 1719
          },
          {
            "name": "绥宁县",
            "pid": 204,
            "code": 1720
          },
          {
            "name": "新宁县",
            "pid": 204,
            "code": 1721
          }
        ]
      },
      {
        "name": "湘潭",
        "pid": 14,
        "code": 205,
        "sub": [
          {
            "name": "岳塘区",
            "pid": 205,
            "code": 1722
          },
          {
            "name": "雨湖区",
            "pid": 205,
            "code": 1723
          },
          {
            "name": "湘乡市",
            "pid": 205,
            "code": 1724
          },
          {
            "name": "韶山市",
            "pid": 205,
            "code": 1725
          },
          {
            "name": "湘潭县",
            "pid": 205,
            "code": 1726
          }
        ]
      },
      {
        "name": "湘西",
        "pid": 14,
        "code": 206,
        "sub": [
          {
            "name": "吉首市",
            "pid": 206,
            "code": 1727
          },
          {
            "name": "泸溪县",
            "pid": 206,
            "code": 1728
          },
          {
            "name": "凤凰县",
            "pid": 206,
            "code": 1729
          },
          {
            "name": "花垣县",
            "pid": 206,
            "code": 1730
          },
          {
            "name": "保靖县",
            "pid": 206,
            "code": 1731
          },
          {
            "name": "古丈县",
            "pid": 206,
            "code": 1732
          },
          {
            "name": "永顺县",
            "pid": 206,
            "code": 1733
          },
          {
            "name": "龙山县",
            "pid": 206,
            "code": 1734
          }
        ]
      },
      {
        "name": "益阳",
        "pid": 14,
        "code": 207,
        "sub": [
          {
            "name": "赫山区",
            "pid": 207,
            "code": 1735
          },
          {
            "name": "资阳区",
            "pid": 207,
            "code": 1736
          },
          {
            "name": "沅江市",
            "pid": 207,
            "code": 1737
          },
          {
            "name": "南县",
            "pid": 207,
            "code": 1738
          },
          {
            "name": "桃江县",
            "pid": 207,
            "code": 1739
          },
          {
            "name": "安化县",
            "pid": 207,
            "code": 1740
          }
        ]
      },
      {
        "name": "永州",
        "pid": 14,
        "code": 208,
        "sub": [
          {
            "name": "江华",
            "pid": 208,
            "code": 1741
          },
          {
            "name": "冷水滩区",
            "pid": 208,
            "code": 1742
          },
          {
            "name": "零陵区",
            "pid": 208,
            "code": 1743
          },
          {
            "name": "祁阳县",
            "pid": 208,
            "code": 1744
          },
          {
            "name": "东安县",
            "pid": 208,
            "code": 1745
          },
          {
            "name": "双牌县",
            "pid": 208,
            "code": 1746
          },
          {
            "name": "道县",
            "pid": 208,
            "code": 1747
          },
          {
            "name": "江永县",
            "pid": 208,
            "code": 1748
          },
          {
            "name": "宁远县",
            "pid": 208,
            "code": 1749
          },
          {
            "name": "蓝山县",
            "pid": 208,
            "code": 1750
          },
          {
            "name": "新田县",
            "pid": 208,
            "code": 1751
          }
        ]
      },
      {
        "name": "岳阳",
        "pid": 14,
        "code": 209,
        "sub": [
          {
            "name": "岳阳楼区",
            "pid": 209,
            "code": 1752
          },
          {
            "name": "君山区",
            "pid": 209,
            "code": 1753
          },
          {
            "name": "云溪区",
            "pid": 209,
            "code": 1754
          },
          {
            "name": "汨罗市",
            "pid": 209,
            "code": 1755
          },
          {
            "name": "临湘市",
            "pid": 209,
            "code": 1756
          },
          {
            "name": "岳阳县",
            "pid": 209,
            "code": 1757
          },
          {
            "name": "华容县",
            "pid": 209,
            "code": 1758
          },
          {
            "name": "湘阴县",
            "pid": 209,
            "code": 1759
          },
          {
            "name": "平江县",
            "pid": 209,
            "code": 1760
          }
        ]
      },
      {
        "name": "株洲",
        "pid": 14,
        "code": 210,
        "sub": [
          {
            "name": "天元区",
            "pid": 210,
            "code": 1761
          },
          {
            "name": "荷塘区",
            "pid": 210,
            "code": 1762
          },
          {
            "name": "芦淞区",
            "pid": 210,
            "code": 1763
          },
          {
            "name": "石峰区",
            "pid": 210,
            "code": 1764
          },
          {
            "name": "醴陵市",
            "pid": 210,
            "code": 1765
          },
          {
            "name": "株洲县",
            "pid": 210,
            "code": 1766
          },
          {
            "name": "攸县",
            "pid": 210,
            "code": 1767
          },
          {
            "name": "茶陵县",
            "pid": 210,
            "code": 1768
          },
          {
            "name": "炎陵县",
            "pid": 210,
            "code": 1769
          }
        ]
      }
    ]
  },
  {
    "name": "吉林",
    "code": 15,
    "sub": [
      {
        "name": "长春",
        "pid": 15,
        "code": 211,
        "sub": [
          {
            "name": "朝阳区",
            "pid": 211,
            "code": 1770
          },
          {
            "name": "宽城区",
            "pid": 211,
            "code": 1771
          },
          {
            "name": "二道区",
            "pid": 211,
            "code": 1772
          },
          {
            "name": "南关区",
            "pid": 211,
            "code": 1773
          },
          {
            "name": "绿园区",
            "pid": 211,
            "code": 1774
          },
          {
            "name": "双阳区",
            "pid": 211,
            "code": 1775
          },
          {
            "name": "净月潭开发区",
            "pid": 211,
            "code": 1776
          },
          {
            "name": "高新技术开发区",
            "pid": 211,
            "code": 1777
          },
          {
            "name": "经济技术开发区",
            "pid": 211,
            "code": 1778
          },
          {
            "name": "汽车产业开发区",
            "pid": 211,
            "code": 1779
          },
          {
            "name": "德惠市",
            "pid": 211,
            "code": 1780
          },
          {
            "name": "九台市",
            "pid": 211,
            "code": 1781
          },
          {
            "name": "榆树市",
            "pid": 211,
            "code": 1782
          },
          {
            "name": "农安县",
            "pid": 211,
            "code": 1783
          }
        ]
      },
      {
        "name": "吉林",
        "pid": 15,
        "code": 212,
        "sub": [
          {
            "name": "船营区",
            "pid": 212,
            "code": 1784
          },
          {
            "name": "昌邑区",
            "pid": 212,
            "code": 1785
          },
          {
            "name": "龙潭区",
            "pid": 212,
            "code": 1786
          },
          {
            "name": "丰满区",
            "pid": 212,
            "code": 1787
          },
          {
            "name": "蛟河市",
            "pid": 212,
            "code": 1788
          },
          {
            "name": "桦甸市",
            "pid": 212,
            "code": 1789
          },
          {
            "name": "舒兰市",
            "pid": 212,
            "code": 1790
          },
          {
            "name": "磐石市",
            "pid": 212,
            "code": 1791
          },
          {
            "name": "永吉县",
            "pid": 212,
            "code": 1792
          }
        ]
      },
      {
        "name": "白城",
        "pid": 15,
        "code": 213,
        "sub": [
          {
            "name": "洮北区",
            "pid": 213,
            "code": 1793
          },
          {
            "name": "洮南市",
            "pid": 213,
            "code": 1794
          },
          {
            "name": "大安市",
            "pid": 213,
            "code": 1795
          },
          {
            "name": "镇赉县",
            "pid": 213,
            "code": 1796
          },
          {
            "name": "通榆县",
            "pid": 213,
            "code": 1797
          }
        ]
      },
      {
        "name": "白山",
        "pid": 15,
        "code": 214,
        "sub": [
          {
            "name": "江源区",
            "pid": 214,
            "code": 1798
          },
          {
            "name": "八道江区",
            "pid": 214,
            "code": 1799
          },
          {
            "name": "长白",
            "pid": 214,
            "code": 1800
          },
          {
            "name": "临江市",
            "pid": 214,
            "code": 1801
          },
          {
            "name": "抚松县",
            "pid": 214,
            "code": 1802
          },
          {
            "name": "靖宇县",
            "pid": 214,
            "code": 1803
          }
        ]
      },
      {
        "name": "辽源",
        "pid": 15,
        "code": 215,
        "sub": [
          {
            "name": "龙山区",
            "pid": 215,
            "code": 1804
          },
          {
            "name": "西安区",
            "pid": 215,
            "code": 1805
          },
          {
            "name": "东丰县",
            "pid": 215,
            "code": 1806
          },
          {
            "name": "东辽县",
            "pid": 215,
            "code": 1807
          }
        ]
      },
      {
        "name": "四平",
        "pid": 15,
        "code": 216,
        "sub": [
          {
            "name": "铁西区",
            "pid": 216,
            "code": 1808
          },
          {
            "name": "铁东区",
            "pid": 216,
            "code": 1809
          },
          {
            "name": "伊通",
            "pid": 216,
            "code": 1810
          },
          {
            "name": "公主岭市",
            "pid": 216,
            "code": 1811
          },
          {
            "name": "双辽市",
            "pid": 216,
            "code": 1812
          },
          {
            "name": "梨树县",
            "pid": 216,
            "code": 1813
          }
        ]
      },
      {
        "name": "松原",
        "pid": 15,
        "code": 217,
        "sub": [
          {
            "name": "前郭尔罗斯",
            "pid": 217,
            "code": 1814
          },
          {
            "name": "宁江区",
            "pid": 217,
            "code": 1815
          },
          {
            "name": "长岭县",
            "pid": 217,
            "code": 1816
          },
          {
            "name": "乾安县",
            "pid": 217,
            "code": 1817
          },
          {
            "name": "扶余县",
            "pid": 217,
            "code": 1818
          }
        ]
      },
      {
        "name": "通化",
        "pid": 15,
        "code": 218,
        "sub": [
          {
            "name": "东昌区",
            "pid": 218,
            "code": 1819
          },
          {
            "name": "二道江区",
            "pid": 218,
            "code": 1820
          },
          {
            "name": "梅河口市",
            "pid": 218,
            "code": 1821
          },
          {
            "name": "集安市",
            "pid": 218,
            "code": 1822
          },
          {
            "name": "通化县",
            "pid": 218,
            "code": 1823
          },
          {
            "name": "辉南县",
            "pid": 218,
            "code": 1824
          },
          {
            "name": "柳河县",
            "pid": 218,
            "code": 1825
          }
        ]
      },
      {
        "name": "延边",
        "pid": 15,
        "code": 219,
        "sub": [
          {
            "name": "延吉市",
            "pid": 219,
            "code": 1826
          },
          {
            "name": "图们市",
            "pid": 219,
            "code": 1827
          },
          {
            "name": "敦化市",
            "pid": 219,
            "code": 1828
          },
          {
            "name": "珲春市",
            "pid": 219,
            "code": 1829
          },
          {
            "name": "龙井市",
            "pid": 219,
            "code": 1830
          },
          {
            "name": "和龙市",
            "pid": 219,
            "code": 1831
          },
          {
            "name": "安图县",
            "pid": 219,
            "code": 1832
          },
          {
            "name": "汪清县",
            "pid": 219,
            "code": 1833
          }
        ]
      }
    ]
  },
  {
    "name": "江苏",
    "code": 16,
    "sub": [
      {
        "name": "南京",
        "pid": 16,
        "code": 220,
        "sub": [
          {
            "name": "玄武区",
            "pid": 220,
            "code": 1834
          },
          {
            "name": "鼓楼区",
            "pid": 220,
            "code": 1835
          },
          {
            "name": "白下区",
            "pid": 220,
            "code": 1836
          },
          {
            "name": "建邺区",
            "pid": 220,
            "code": 1837
          },
          {
            "name": "秦淮区",
            "pid": 220,
            "code": 1838
          },
          {
            "name": "雨花台区",
            "pid": 220,
            "code": 1839
          },
          {
            "name": "下关区",
            "pid": 220,
            "code": 1840
          },
          {
            "name": "栖霞区",
            "pid": 220,
            "code": 1841
          },
          {
            "name": "浦口区",
            "pid": 220,
            "code": 1842
          },
          {
            "name": "江宁区",
            "pid": 220,
            "code": 1843
          },
          {
            "name": "六合区",
            "pid": 220,
            "code": 1844
          },
          {
            "name": "溧水县",
            "pid": 220,
            "code": 1845
          },
          {
            "name": "高淳县",
            "pid": 220,
            "code": 1846
          }
        ]
      },
      {
        "name": "苏州",
        "pid": 16,
        "code": 221,
        "sub": [
          {
            "name": "沧浪区",
            "pid": 221,
            "code": 1847
          },
          {
            "name": "金阊区",
            "pid": 221,
            "code": 1848
          },
          {
            "name": "平江区",
            "pid": 221,
            "code": 1849
          },
          {
            "name": "虎丘区",
            "pid": 221,
            "code": 1850
          },
          {
            "name": "吴中区",
            "pid": 221,
            "code": 1851
          },
          {
            "name": "相城区",
            "pid": 221,
            "code": 1852
          },
          {
            "name": "园区",
            "pid": 221,
            "code": 1853
          },
          {
            "name": "新区",
            "pid": 221,
            "code": 1854
          },
          {
            "name": "常熟市",
            "pid": 221,
            "code": 1855
          },
          {
            "name": "张家港市",
            "pid": 221,
            "code": 1856
          },
          {
            "name": "玉山镇",
            "pid": 221,
            "code": 1857
          },
          {
            "name": "巴城镇",
            "pid": 221,
            "code": 1858
          },
          {
            "name": "周市镇",
            "pid": 221,
            "code": 1859
          },
          {
            "name": "陆家镇",
            "pid": 221,
            "code": 1860
          },
          {
            "name": "花桥镇",
            "pid": 221,
            "code": 1861
          },
          {
            "name": "淀山湖镇",
            "pid": 221,
            "code": 1862
          },
          {
            "name": "张浦镇",
            "pid": 221,
            "code": 1863
          },
          {
            "name": "周庄镇",
            "pid": 221,
            "code": 1864
          },
          {
            "name": "千灯镇",
            "pid": 221,
            "code": 1865
          },
          {
            "name": "锦溪镇",
            "pid": 221,
            "code": 1866
          },
          {
            "name": "开发区",
            "pid": 221,
            "code": 1867
          },
          {
            "name": "吴江市",
            "pid": 221,
            "code": 1868
          },
          {
            "name": "太仓市",
            "pid": 221,
            "code": 1869
          }
        ]
      },
      {
        "name": "无锡",
        "pid": 16,
        "code": 222,
        "sub": [
          {
            "name": "崇安区",
            "pid": 222,
            "code": 1870
          },
          {
            "name": "北塘区",
            "pid": 222,
            "code": 1871
          },
          {
            "name": "南长区",
            "pid": 222,
            "code": 1872
          },
          {
            "name": "锡山区",
            "pid": 222,
            "code": 1873
          },
          {
            "name": "惠山区",
            "pid": 222,
            "code": 1874
          },
          {
            "name": "滨湖区",
            "pid": 222,
            "code": 1875
          },
          {
            "name": "新区",
            "pid": 222,
            "code": 1876
          },
          {
            "name": "江阴市",
            "pid": 222,
            "code": 1877
          },
          {
            "name": "宜兴市",
            "pid": 222,
            "code": 1878
          }
        ]
      },
      {
        "name": "常州",
        "pid": 16,
        "code": 223,
        "sub": [
          {
            "name": "天宁区",
            "pid": 223,
            "code": 1879
          },
          {
            "name": "钟楼区",
            "pid": 223,
            "code": 1880
          },
          {
            "name": "戚墅堰区",
            "pid": 223,
            "code": 1881
          },
          {
            "name": "郊区",
            "pid": 223,
            "code": 1882
          },
          {
            "name": "新北区",
            "pid": 223,
            "code": 1883
          },
          {
            "name": "武进区",
            "pid": 223,
            "code": 1884
          },
          {
            "name": "溧阳市",
            "pid": 223,
            "code": 1885
          },
          {
            "name": "金坛市",
            "pid": 223,
            "code": 1886
          }
        ]
      },
      {
        "name": "淮安",
        "pid": 16,
        "code": 224,
        "sub": [
          {
            "name": "清河区",
            "pid": 224,
            "code": 1887
          },
          {
            "name": "清浦区",
            "pid": 224,
            "code": 1888
          },
          {
            "name": "楚州区",
            "pid": 224,
            "code": 1889
          },
          {
            "name": "淮阴区",
            "pid": 224,
            "code": 1890
          },
          {
            "name": "涟水县",
            "pid": 224,
            "code": 1891
          },
          {
            "name": "洪泽县",
            "pid": 224,
            "code": 1892
          },
          {
            "name": "盱眙县",
            "pid": 224,
            "code": 1893
          },
          {
            "name": "金湖县",
            "pid": 224,
            "code": 1894
          }
        ]
      },
      {
        "name": "连云港",
        "pid": 16,
        "code": 225,
        "sub": [
          {
            "name": "新浦区",
            "pid": 225,
            "code": 1895
          },
          {
            "name": "连云区",
            "pid": 225,
            "code": 1896
          },
          {
            "name": "海州区",
            "pid": 225,
            "code": 1897
          },
          {
            "name": "赣榆县",
            "pid": 225,
            "code": 1898
          },
          {
            "name": "东海县",
            "pid": 225,
            "code": 1899
          },
          {
            "name": "灌云县",
            "pid": 225,
            "code": 1900
          },
          {
            "name": "灌南县",
            "pid": 225,
            "code": 1901
          }
        ]
      },
      {
        "name": "南通",
        "pid": 16,
        "code": 226,
        "sub": [
          {
            "name": "崇川区",
            "pid": 226,
            "code": 1902
          },
          {
            "name": "港闸区",
            "pid": 226,
            "code": 1903
          },
          {
            "name": "经济开发区",
            "pid": 226,
            "code": 1904
          },
          {
            "name": "启东市",
            "pid": 226,
            "code": 1905
          },
          {
            "name": "如皋市",
            "pid": 226,
            "code": 1906
          },
          {
            "name": "通州市",
            "pid": 226,
            "code": 1907
          },
          {
            "name": "海门市",
            "pid": 226,
            "code": 1908
          },
          {
            "name": "海安县",
            "pid": 226,
            "code": 1909
          },
          {
            "name": "如东县",
            "pid": 226,
            "code": 1910
          }
        ]
      },
      {
        "name": "宿迁",
        "pid": 16,
        "code": 227,
        "sub": [
          {
            "name": "宿城区",
            "pid": 227,
            "code": 1911
          },
          {
            "name": "宿豫区",
            "pid": 227,
            "code": 1912
          },
          {
            "name": "宿豫县",
            "pid": 227,
            "code": 1913
          },
          {
            "name": "沭阳县",
            "pid": 227,
            "code": 1914
          },
          {
            "name": "泗阳县",
            "pid": 227,
            "code": 1915
          },
          {
            "name": "泗洪县",
            "pid": 227,
            "code": 1916
          }
        ]
      },
      {
        "name": "泰州",
        "pid": 16,
        "code": 228,
        "sub": [
          {
            "name": "海陵区",
            "pid": 228,
            "code": 1917
          },
          {
            "name": "高港区",
            "pid": 228,
            "code": 1918
          },
          {
            "name": "兴化市",
            "pid": 228,
            "code": 1919
          },
          {
            "name": "靖江市",
            "pid": 228,
            "code": 1920
          },
          {
            "name": "泰兴市",
            "pid": 228,
            "code": 1921
          },
          {
            "name": "姜堰市",
            "pid": 228,
            "code": 1922
          }
        ]
      },
      {
        "name": "徐州",
        "pid": 16,
        "code": 229,
        "sub": [
          {
            "name": "云龙区",
            "pid": 229,
            "code": 1923
          },
          {
            "name": "鼓楼区",
            "pid": 229,
            "code": 1924
          },
          {
            "name": "九里区",
            "pid": 229,
            "code": 1925
          },
          {
            "name": "贾汪区",
            "pid": 229,
            "code": 1926
          },
          {
            "name": "泉山区",
            "pid": 229,
            "code": 1927
          },
          {
            "name": "新沂市",
            "pid": 229,
            "code": 1928
          },
          {
            "name": "邳州市",
            "pid": 229,
            "code": 1929
          },
          {
            "name": "丰县",
            "pid": 229,
            "code": 1930
          },
          {
            "name": "沛县",
            "pid": 229,
            "code": 1931
          },
          {
            "name": "铜山县",
            "pid": 229,
            "code": 1932
          },
          {
            "name": "睢宁县",
            "pid": 229,
            "code": 1933
          }
        ]
      },
      {
        "name": "盐城",
        "pid": 16,
        "code": 230,
        "sub": [
          {
            "name": "城区",
            "pid": 230,
            "code": 1934
          },
          {
            "name": "亭湖区",
            "pid": 230,
            "code": 1935
          },
          {
            "name": "盐都区",
            "pid": 230,
            "code": 1936
          },
          {
            "name": "盐都县",
            "pid": 230,
            "code": 1937
          },
          {
            "name": "东台市",
            "pid": 230,
            "code": 1938
          },
          {
            "name": "大丰市",
            "pid": 230,
            "code": 1939
          },
          {
            "name": "响水县",
            "pid": 230,
            "code": 1940
          },
          {
            "name": "滨海县",
            "pid": 230,
            "code": 1941
          },
          {
            "name": "阜宁县",
            "pid": 230,
            "code": 1942
          },
          {
            "name": "射阳县",
            "pid": 230,
            "code": 1943
          },
          {
            "name": "建湖县",
            "pid": 230,
            "code": 1944
          }
        ]
      },
      {
        "name": "扬州",
        "pid": 16,
        "code": 231,
        "sub": [
          {
            "name": "广陵区",
            "pid": 231,
            "code": 1945
          },
          {
            "name": "维扬区",
            "pid": 231,
            "code": 1946
          },
          {
            "name": "邗江区",
            "pid": 231,
            "code": 1947
          },
          {
            "name": "仪征市",
            "pid": 231,
            "code": 1948
          },
          {
            "name": "高邮市",
            "pid": 231,
            "code": 1949
          },
          {
            "name": "江都市",
            "pid": 231,
            "code": 1950
          },
          {
            "name": "宝应县",
            "pid": 231,
            "code": 1951
          }
        ]
      },
      {
        "name": "镇江",
        "pid": 16,
        "code": 232,
        "sub": [
          {
            "name": "京口区",
            "pid": 232,
            "code": 1952
          },
          {
            "name": "润州区",
            "pid": 232,
            "code": 1953
          },
          {
            "name": "丹徒区",
            "pid": 232,
            "code": 1954
          },
          {
            "name": "丹阳市",
            "pid": 232,
            "code": 1955
          },
          {
            "name": "扬中市",
            "pid": 232,
            "code": 1956
          },
          {
            "name": "句容市",
            "pid": 232,
            "code": 1957
          }
        ]
      }
    ]
  },
  {
    "name": "江西",
    "code": 17,
    "sub": [
      {
        "name": "南昌",
        "pid": 17,
        "code": 233,
        "sub": [
          {
            "name": "东湖区",
            "pid": 233,
            "code": 1958
          },
          {
            "name": "西湖区",
            "pid": 233,
            "code": 1959
          },
          {
            "name": "青云谱区",
            "pid": 233,
            "code": 1960
          },
          {
            "name": "湾里区",
            "pid": 233,
            "code": 1961
          },
          {
            "name": "青山湖区",
            "pid": 233,
            "code": 1962
          },
          {
            "name": "红谷滩新区",
            "pid": 233,
            "code": 1963
          },
          {
            "name": "昌北区",
            "pid": 233,
            "code": 1964
          },
          {
            "name": "高新区",
            "pid": 233,
            "code": 1965
          },
          {
            "name": "南昌县",
            "pid": 233,
            "code": 1966
          },
          {
            "name": "新建县",
            "pid": 233,
            "code": 1967
          },
          {
            "name": "安义县",
            "pid": 233,
            "code": 1968
          },
          {
            "name": "进贤县",
            "pid": 233,
            "code": 1969
          }
        ]
      },
      {
        "name": "抚州",
        "pid": 17,
        "code": 234,
        "sub": [
          {
            "name": "临川区",
            "pid": 234,
            "code": 1970
          },
          {
            "name": "南城县",
            "pid": 234,
            "code": 1971
          },
          {
            "name": "黎川县",
            "pid": 234,
            "code": 1972
          },
          {
            "name": "南丰县",
            "pid": 234,
            "code": 1973
          },
          {
            "name": "崇仁县",
            "pid": 234,
            "code": 1974
          },
          {
            "name": "乐安县",
            "pid": 234,
            "code": 1975
          },
          {
            "name": "宜黄县",
            "pid": 234,
            "code": 1976
          },
          {
            "name": "金溪县",
            "pid": 234,
            "code": 1977
          },
          {
            "name": "资溪县",
            "pid": 234,
            "code": 1978
          },
          {
            "name": "东乡县",
            "pid": 234,
            "code": 1979
          },
          {
            "name": "广昌县",
            "pid": 234,
            "code": 1980
          }
        ]
      },
      {
        "name": "赣州",
        "pid": 17,
        "code": 235,
        "sub": [
          {
            "name": "章贡区",
            "pid": 235,
            "code": 1981
          },
          {
            "name": "于都县",
            "pid": 235,
            "code": 1982
          },
          {
            "name": "瑞金市",
            "pid": 235,
            "code": 1983
          },
          {
            "name": "南康市",
            "pid": 235,
            "code": 1984
          },
          {
            "name": "赣县",
            "pid": 235,
            "code": 1985
          },
          {
            "name": "信丰县",
            "pid": 235,
            "code": 1986
          },
          {
            "name": "大余县",
            "pid": 235,
            "code": 1987
          },
          {
            "name": "上犹县",
            "pid": 235,
            "code": 1988
          },
          {
            "name": "崇义县",
            "pid": 235,
            "code": 1989
          },
          {
            "name": "安远县",
            "pid": 235,
            "code": 1990
          },
          {
            "name": "龙南县",
            "pid": 235,
            "code": 1991
          },
          {
            "name": "定南县",
            "pid": 235,
            "code": 1992
          },
          {
            "name": "全南县",
            "pid": 235,
            "code": 1993
          },
          {
            "name": "宁都县",
            "pid": 235,
            "code": 1994
          },
          {
            "name": "兴国县",
            "pid": 235,
            "code": 1995
          },
          {
            "name": "会昌县",
            "pid": 235,
            "code": 1996
          },
          {
            "name": "寻乌县",
            "pid": 235,
            "code": 1997
          },
          {
            "name": "石城县",
            "pid": 235,
            "code": 1998
          }
        ]
      },
      {
        "name": "吉安",
        "pid": 17,
        "code": 236,
        "sub": [
          {
            "name": "安福县",
            "pid": 236,
            "code": 1999
          },
          {
            "name": "吉州区",
            "pid": 236,
            "code": 2000
          },
          {
            "name": "青原区",
            "pid": 236,
            "code": 2001
          },
          {
            "name": "井冈山市",
            "pid": 236,
            "code": 2002
          },
          {
            "name": "吉安县",
            "pid": 236,
            "code": 2003
          },
          {
            "name": "吉水县",
            "pid": 236,
            "code": 2004
          },
          {
            "name": "峡江县",
            "pid": 236,
            "code": 2005
          },
          {
            "name": "新干县",
            "pid": 236,
            "code": 2006
          },
          {
            "name": "永丰县",
            "pid": 236,
            "code": 2007
          },
          {
            "name": "泰和县",
            "pid": 236,
            "code": 2008
          },
          {
            "name": "遂川县",
            "pid": 236,
            "code": 2009
          },
          {
            "name": "万安县",
            "pid": 236,
            "code": 2010
          },
          {
            "name": "永新县",
            "pid": 236,
            "code": 2011
          }
        ]
      },
      {
        "name": "景德镇",
        "pid": 17,
        "code": 237,
        "sub": [
          {
            "name": "珠山区",
            "pid": 237,
            "code": 2012
          },
          {
            "name": "昌江区",
            "pid": 237,
            "code": 2013
          },
          {
            "name": "乐平市",
            "pid": 237,
            "code": 2014
          },
          {
            "name": "浮梁县",
            "pid": 237,
            "code": 2015
          }
        ]
      },
      {
        "name": "九江",
        "pid": 17,
        "code": 238,
        "sub": [
          {
            "name": "浔阳区",
            "pid": 238,
            "code": 2016
          },
          {
            "name": "庐山区",
            "pid": 238,
            "code": 2017
          },
          {
            "name": "瑞昌市",
            "pid": 238,
            "code": 2018
          },
          {
            "name": "九江县",
            "pid": 238,
            "code": 2019
          },
          {
            "name": "武宁县",
            "pid": 238,
            "code": 2020
          },
          {
            "name": "修水县",
            "pid": 238,
            "code": 2021
          },
          {
            "name": "永修县",
            "pid": 238,
            "code": 2022
          },
          {
            "name": "德安县",
            "pid": 238,
            "code": 2023
          },
          {
            "name": "星子县",
            "pid": 238,
            "code": 2024
          },
          {
            "name": "都昌县",
            "pid": 238,
            "code": 2025
          },
          {
            "name": "湖口县",
            "pid": 238,
            "code": 2026
          },
          {
            "name": "彭泽县",
            "pid": 238,
            "code": 2027
          }
        ]
      },
      {
        "name": "萍乡",
        "pid": 17,
        "code": 239,
        "sub": [
          {
            "name": "安源区",
            "pid": 239,
            "code": 2028
          },
          {
            "name": "湘东区",
            "pid": 239,
            "code": 2029
          },
          {
            "name": "莲花县",
            "pid": 239,
            "code": 2030
          },
          {
            "name": "芦溪县",
            "pid": 239,
            "code": 2031
          },
          {
            "name": "上栗县",
            "pid": 239,
            "code": 2032
          }
        ]
      },
      {
        "name": "上饶",
        "pid": 17,
        "code": 240,
        "sub": [
          {
            "name": "信州区",
            "pid": 240,
            "code": 2033
          },
          {
            "name": "德兴市",
            "pid": 240,
            "code": 2034
          },
          {
            "name": "上饶县",
            "pid": 240,
            "code": 2035
          },
          {
            "name": "广丰县",
            "pid": 240,
            "code": 2036
          },
          {
            "name": "玉山县",
            "pid": 240,
            "code": 2037
          },
          {
            "name": "铅山县",
            "pid": 240,
            "code": 2038
          },
          {
            "name": "横峰县",
            "pid": 240,
            "code": 2039
          },
          {
            "name": "弋阳县",
            "pid": 240,
            "code": 2040
          },
          {
            "name": "余干县",
            "pid": 240,
            "code": 2041
          },
          {
            "name": "波阳县",
            "pid": 240,
            "code": 2042
          },
          {
            "name": "万年县",
            "pid": 240,
            "code": 2043
          },
          {
            "name": "婺源县",
            "pid": 240,
            "code": 2044
          }
        ]
      },
      {
        "name": "新余",
        "pid": 17,
        "code": 241,
        "sub": [
          {
            "name": "渝水区",
            "pid": 241,
            "code": 2045
          },
          {
            "name": "分宜县",
            "pid": 241,
            "code": 2046
          }
        ]
      },
      {
        "name": "宜春",
        "pid": 17,
        "code": 242,
        "sub": [
          {
            "name": "袁州区",
            "pid": 242,
            "code": 2047
          },
          {
            "name": "丰城市",
            "pid": 242,
            "code": 2048
          },
          {
            "name": "樟树市",
            "pid": 242,
            "code": 2049
          },
          {
            "name": "高安市",
            "pid": 242,
            "code": 2050
          },
          {
            "name": "奉新县",
            "pid": 242,
            "code": 2051
          },
          {
            "name": "万载县",
            "pid": 242,
            "code": 2052
          },
          {
            "name": "上高县",
            "pid": 242,
            "code": 2053
          },
          {
            "name": "宜丰县",
            "pid": 242,
            "code": 2054
          },
          {
            "name": "靖安县",
            "pid": 242,
            "code": 2055
          },
          {
            "name": "铜鼓县",
            "pid": 242,
            "code": 2056
          }
        ]
      },
      {
        "name": "鹰潭",
        "pid": 17,
        "code": 243,
        "sub": [
          {
            "name": "月湖区",
            "pid": 243,
            "code": 2057
          },
          {
            "name": "贵溪市",
            "pid": 243,
            "code": 2058
          },
          {
            "name": "余江县",
            "pid": 243,
            "code": 2059
          }
        ]
      }
    ]
  },
  {
    "name": "辽宁",
    "code": 18,
    "sub": [
      {
        "name": "沈阳",
        "pid": 18,
        "code": 244,
        "sub": [
          {
            "name": "沈河区",
            "pid": 244,
            "code": 2060
          },
          {
            "name": "皇姑区",
            "pid": 244,
            "code": 2061
          },
          {
            "name": "和平区",
            "pid": 244,
            "code": 2062
          },
          {
            "name": "大东区",
            "pid": 244,
            "code": 2063
          },
          {
            "name": "铁西区",
            "pid": 244,
            "code": 2064
          },
          {
            "name": "苏家屯区",
            "pid": 244,
            "code": 2065
          },
          {
            "name": "东陵区",
            "pid": 244,
            "code": 2066
          },
          {
            "name": "沈北新区",
            "pid": 244,
            "code": 2067
          },
          {
            "name": "于洪区",
            "pid": 244,
            "code": 2068
          },
          {
            "name": "浑南新区",
            "pid": 244,
            "code": 2069
          },
          {
            "name": "新民市",
            "pid": 244,
            "code": 2070
          },
          {
            "name": "辽中县",
            "pid": 244,
            "code": 2071
          },
          {
            "name": "康平县",
            "pid": 244,
            "code": 2072
          },
          {
            "name": "法库县",
            "pid": 244,
            "code": 2073
          }
        ]
      },
      {
        "name": "大连",
        "pid": 18,
        "code": 245,
        "sub": [
          {
            "name": "西岗区",
            "pid": 245,
            "code": 2074
          },
          {
            "name": "中山区",
            "pid": 245,
            "code": 2075
          },
          {
            "name": "沙河口区",
            "pid": 245,
            "code": 2076
          },
          {
            "name": "甘井子区",
            "pid": 245,
            "code": 2077
          },
          {
            "name": "旅顺口区",
            "pid": 245,
            "code": 2078
          },
          {
            "name": "金州区",
            "pid": 245,
            "code": 2079
          },
          {
            "name": "开发区",
            "pid": 245,
            "code": 2080
          },
          {
            "name": "瓦房店市",
            "pid": 245,
            "code": 2081
          },
          {
            "name": "普兰店市",
            "pid": 245,
            "code": 2082
          },
          {
            "name": "庄河市",
            "pid": 245,
            "code": 2083
          },
          {
            "name": "长海县",
            "pid": 245,
            "code": 2084
          }
        ]
      },
      {
        "name": "鞍山",
        "pid": 18,
        "code": 246,
        "sub": [
          {
            "name": "铁东区",
            "pid": 246,
            "code": 2085
          },
          {
            "name": "铁西区",
            "pid": 246,
            "code": 2086
          },
          {
            "name": "立山区",
            "pid": 246,
            "code": 2087
          },
          {
            "name": "千山区",
            "pid": 246,
            "code": 2088
          },
          {
            "name": "岫岩",
            "pid": 246,
            "code": 2089
          },
          {
            "name": "海城市",
            "pid": 246,
            "code": 2090
          },
          {
            "name": "台安县",
            "pid": 246,
            "code": 2091
          }
        ]
      },
      {
        "name": "本溪",
        "pid": 18,
        "code": 247,
        "sub": [
          {
            "name": "本溪",
            "pid": 247,
            "code": 2092
          },
          {
            "name": "平山区",
            "pid": 247,
            "code": 2093
          },
          {
            "name": "明山区",
            "pid": 247,
            "code": 2094
          },
          {
            "name": "溪湖区",
            "pid": 247,
            "code": 2095
          },
          {
            "name": "南芬区",
            "pid": 247,
            "code": 2096
          },
          {
            "name": "桓仁",
            "pid": 247,
            "code": 2097
          }
        ]
      },
      {
        "name": "朝阳",
        "pid": 18,
        "code": 248,
        "sub": [
          {
            "name": "双塔区",
            "pid": 248,
            "code": 2098
          },
          {
            "name": "龙城区",
            "pid": 248,
            "code": 2099
          },
          {
            "name": "喀喇沁左翼蒙古族自治县",
            "pid": 248,
            "code": 2100
          },
          {
            "name": "北票市",
            "pid": 248,
            "code": 2101
          },
          {
            "name": "凌源市",
            "pid": 248,
            "code": 2102
          },
          {
            "name": "朝阳县",
            "pid": 248,
            "code": 2103
          },
          {
            "name": "建平县",
            "pid": 248,
            "code": 2104
          }
        ]
      },
      {
        "name": "丹东",
        "pid": 18,
        "code": 249,
        "sub": [
          {
            "name": "振兴区",
            "pid": 249,
            "code": 2105
          },
          {
            "name": "元宝区",
            "pid": 249,
            "code": 2106
          },
          {
            "name": "振安区",
            "pid": 249,
            "code": 2107
          },
          {
            "name": "宽甸",
            "pid": 249,
            "code": 2108
          },
          {
            "name": "东港市",
            "pid": 249,
            "code": 2109
          },
          {
            "name": "凤城市",
            "pid": 249,
            "code": 2110
          }
        ]
      },
      {
        "name": "抚顺",
        "pid": 18,
        "code": 250,
        "sub": [
          {
            "name": "顺城区",
            "pid": 250,
            "code": 2111
          },
          {
            "name": "新抚区",
            "pid": 250,
            "code": 2112
          },
          {
            "name": "东洲区",
            "pid": 250,
            "code": 2113
          },
          {
            "name": "望花区",
            "pid": 250,
            "code": 2114
          },
          {
            "name": "清原",
            "pid": 250,
            "code": 2115
          },
          {
            "name": "新宾",
            "pid": 250,
            "code": 2116
          },
          {
            "name": "抚顺县",
            "pid": 250,
            "code": 2117
          }
        ]
      },
      {
        "name": "阜新",
        "pid": 18,
        "code": 251,
        "sub": [
          {
            "name": "阜新",
            "pid": 251,
            "code": 2118
          },
          {
            "name": "海州区",
            "pid": 251,
            "code": 2119
          },
          {
            "name": "新邱区",
            "pid": 251,
            "code": 2120
          },
          {
            "name": "太平区",
            "pid": 251,
            "code": 2121
          },
          {
            "name": "清河门区",
            "pid": 251,
            "code": 2122
          },
          {
            "name": "细河区",
            "pid": 251,
            "code": 2123
          },
          {
            "name": "彰武县",
            "pid": 251,
            "code": 2124
          }
        ]
      },
      {
        "name": "葫芦岛",
        "pid": 18,
        "code": 252,
        "sub": [
          {
            "name": "龙港区",
            "pid": 252,
            "code": 2125
          },
          {
            "name": "南票区",
            "pid": 252,
            "code": 2126
          },
          {
            "name": "连山区",
            "pid": 252,
            "code": 2127
          },
          {
            "name": "兴城市",
            "pid": 252,
            "code": 2128
          },
          {
            "name": "绥中县",
            "pid": 252,
            "code": 2129
          },
          {
            "name": "建昌县",
            "pid": 252,
            "code": 2130
          }
        ]
      },
      {
        "name": "锦州",
        "pid": 18,
        "code": 253,
        "sub": [
          {
            "name": "太和区",
            "pid": 253,
            "code": 2131
          },
          {
            "name": "古塔区",
            "pid": 253,
            "code": 2132
          },
          {
            "name": "凌河区",
            "pid": 253,
            "code": 2133
          },
          {
            "name": "凌海市",
            "pid": 253,
            "code": 2134
          },
          {
            "name": "北镇市",
            "pid": 253,
            "code": 2135
          },
          {
            "name": "黑山县",
            "pid": 253,
            "code": 2136
          },
          {
            "name": "义县",
            "pid": 253,
            "code": 2137
          }
        ]
      },
      {
        "name": "辽阳",
        "pid": 18,
        "code": 254,
        "sub": [
          {
            "name": "白塔区",
            "pid": 254,
            "code": 2138
          },
          {
            "name": "文圣区",
            "pid": 254,
            "code": 2139
          },
          {
            "name": "宏伟区",
            "pid": 254,
            "code": 2140
          },
          {
            "name": "太子河区",
            "pid": 254,
            "code": 2141
          },
          {
            "name": "弓长岭区",
            "pid": 254,
            "code": 2142
          },
          {
            "name": "灯塔市",
            "pid": 254,
            "code": 2143
          },
          {
            "name": "辽阳县",
            "pid": 254,
            "code": 2144
          }
        ]
      },
      {
        "name": "盘锦",
        "pid": 18,
        "code": 255,
        "sub": [
          {
            "name": "双台子区",
            "pid": 255,
            "code": 2145
          },
          {
            "name": "兴隆台区",
            "pid": 255,
            "code": 2146
          },
          {
            "name": "大洼县",
            "pid": 255,
            "code": 2147
          },
          {
            "name": "盘山县",
            "pid": 255,
            "code": 2148
          }
        ]
      },
      {
        "name": "铁岭",
        "pid": 18,
        "code": 256,
        "sub": [
          {
            "name": "银州区",
            "pid": 256,
            "code": 2149
          },
          {
            "name": "清河区",
            "pid": 256,
            "code": 2150
          },
          {
            "name": "调兵山市",
            "pid": 256,
            "code": 2151
          },
          {
            "name": "开原市",
            "pid": 256,
            "code": 2152
          },
          {
            "name": "铁岭县",
            "pid": 256,
            "code": 2153
          },
          {
            "name": "西丰县",
            "pid": 256,
            "code": 2154
          },
          {
            "name": "昌图县",
            "pid": 256,
            "code": 2155
          }
        ]
      },
      {
        "name": "营口",
        "pid": 18,
        "code": 257,
        "sub": [
          {
            "name": "站前区",
            "pid": 257,
            "code": 2156
          },
          {
            "name": "西市区",
            "pid": 257,
            "code": 2157
          },
          {
            "name": "鲅鱼圈区",
            "pid": 257,
            "code": 2158
          },
          {
            "name": "老边区",
            "pid": 257,
            "code": 2159
          },
          {
            "name": "盖州市",
            "pid": 257,
            "code": 2160
          },
          {
            "name": "大石桥市",
            "pid": 257,
            "code": 2161
          }
        ]
      }
    ]
  },
  {
    "name": "内蒙古",
    "code": 19,
    "sub": [
      {
        "name": "呼和浩特",
        "pid": 19,
        "code": 258,
        "sub": [
          {
            "name": "回民区",
            "pid": 258,
            "code": 2162
          },
          {
            "name": "玉泉区",
            "pid": 258,
            "code": 2163
          },
          {
            "name": "新城区",
            "pid": 258,
            "code": 2164
          },
          {
            "name": "赛罕区",
            "pid": 258,
            "code": 2165
          },
          {
            "name": "清水河县",
            "pid": 258,
            "code": 2166
          },
          {
            "name": "土默特左旗",
            "pid": 258,
            "code": 2167
          },
          {
            "name": "托克托县",
            "pid": 258,
            "code": 2168
          },
          {
            "name": "和林格尔县",
            "pid": 258,
            "code": 2169
          },
          {
            "name": "武川县",
            "pid": 258,
            "code": 2170
          }
        ]
      },
      {
        "name": "阿拉善盟",
        "pid": 19,
        "code": 259,
        "sub": [
          {
            "name": "阿拉善左旗",
            "pid": 259,
            "code": 2171
          },
          {
            "name": "阿拉善右旗",
            "pid": 259,
            "code": 2172
          },
          {
            "name": "额济纳旗",
            "pid": 259,
            "code": 2173
          }
        ]
      },
      {
        "name": "巴彦淖尔盟",
        "pid": 19,
        "code": 260,
        "sub": [
          {
            "name": "临河区",
            "pid": 260,
            "code": 2174
          },
          {
            "name": "五原县",
            "pid": 260,
            "code": 2175
          },
          {
            "name": "磴口县",
            "pid": 260,
            "code": 2176
          },
          {
            "name": "乌拉特前旗",
            "pid": 260,
            "code": 2177
          },
          {
            "name": "乌拉特中旗",
            "pid": 260,
            "code": 2178
          },
          {
            "name": "乌拉特后旗",
            "pid": 260,
            "code": 2179
          },
          {
            "name": "杭锦后旗",
            "pid": 260,
            "code": 2180
          }
        ]
      },
      {
        "name": "包头",
        "pid": 19,
        "code": 261,
        "sub": [
          {
            "name": "昆都仑区",
            "pid": 261,
            "code": 2181
          },
          {
            "name": "青山区",
            "pid": 261,
            "code": 2182
          },
          {
            "name": "东河区",
            "pid": 261,
            "code": 2183
          },
          {
            "name": "九原区",
            "pid": 261,
            "code": 2184
          },
          {
            "name": "石拐区",
            "pid": 261,
            "code": 2185
          },
          {
            "name": "白云矿区",
            "pid": 261,
            "code": 2186
          },
          {
            "name": "土默特右旗",
            "pid": 261,
            "code": 2187
          },
          {
            "name": "固阳县",
            "pid": 261,
            "code": 2188
          },
          {
            "name": "达尔罕茂明安联合旗",
            "pid": 261,
            "code": 2189
          }
        ]
      },
      {
        "name": "赤峰",
        "pid": 19,
        "code": 262,
        "sub": [
          {
            "name": "红山区",
            "pid": 262,
            "code": 2190
          },
          {
            "name": "元宝山区",
            "pid": 262,
            "code": 2191
          },
          {
            "name": "松山区",
            "pid": 262,
            "code": 2192
          },
          {
            "name": "阿鲁科尔沁旗",
            "pid": 262,
            "code": 2193
          },
          {
            "name": "巴林左旗",
            "pid": 262,
            "code": 2194
          },
          {
            "name": "巴林右旗",
            "pid": 262,
            "code": 2195
          },
          {
            "name": "林西县",
            "pid": 262,
            "code": 2196
          },
          {
            "name": "克什克腾旗",
            "pid": 262,
            "code": 2197
          },
          {
            "name": "翁牛特旗",
            "pid": 262,
            "code": 2198
          },
          {
            "name": "喀喇沁旗",
            "pid": 262,
            "code": 2199
          },
          {
            "name": "宁城县",
            "pid": 262,
            "code": 2200
          },
          {
            "name": "敖汉旗",
            "pid": 262,
            "code": 2201
          }
        ]
      },
      {
        "name": "鄂尔多斯",
        "pid": 19,
        "code": 263,
        "sub": [
          {
            "name": "东胜区",
            "pid": 263,
            "code": 2202
          },
          {
            "name": "达拉特旗",
            "pid": 263,
            "code": 2203
          },
          {
            "name": "准格尔旗",
            "pid": 263,
            "code": 2204
          },
          {
            "name": "鄂托克前旗",
            "pid": 263,
            "code": 2205
          },
          {
            "name": "鄂托克旗",
            "pid": 263,
            "code": 2206
          },
          {
            "name": "杭锦旗",
            "pid": 263,
            "code": 2207
          },
          {
            "name": "乌审旗",
            "pid": 263,
            "code": 2208
          },
          {
            "name": "伊金霍洛旗",
            "pid": 263,
            "code": 2209
          }
        ]
      },
      {
        "name": "呼伦贝尔",
        "pid": 19,
        "code": 264,
        "sub": [
          {
            "name": "海拉尔区",
            "pid": 264,
            "code": 2210
          },
          {
            "name": "莫力达瓦",
            "pid": 264,
            "code": 2211
          },
          {
            "name": "满洲里市",
            "pid": 264,
            "code": 2212
          },
          {
            "name": "牙克石市",
            "pid": 264,
            "code": 2213
          },
          {
            "name": "扎兰屯市",
            "pid": 264,
            "code": 2214
          },
          {
            "name": "额尔古纳市",
            "pid": 264,
            "code": 2215
          },
          {
            "name": "根河市",
            "pid": 264,
            "code": 2216
          },
          {
            "name": "阿荣旗",
            "pid": 264,
            "code": 2217
          },
          {
            "name": "鄂伦春自治旗",
            "pid": 264,
            "code": 2218
          },
          {
            "name": "鄂温克族自治旗",
            "pid": 264,
            "code": 2219
          },
          {
            "name": "陈巴尔虎旗",
            "pid": 264,
            "code": 2220
          },
          {
            "name": "新巴尔虎左旗",
            "pid": 264,
            "code": 2221
          },
          {
            "name": "新巴尔虎右旗",
            "pid": 264,
            "code": 2222
          }
        ]
      },
      {
        "name": "通辽",
        "pid": 19,
        "code": 265,
        "sub": [
          {
            "name": "科尔沁区",
            "pid": 265,
            "code": 2223
          },
          {
            "name": "霍林郭勒市",
            "pid": 265,
            "code": 2224
          },
          {
            "name": "科尔沁左翼中旗",
            "pid": 265,
            "code": 2225
          },
          {
            "name": "科尔沁左翼后旗",
            "pid": 265,
            "code": 2226
          },
          {
            "name": "开鲁县",
            "pid": 265,
            "code": 2227
          },
          {
            "name": "库伦旗",
            "pid": 265,
            "code": 2228
          },
          {
            "name": "奈曼旗",
            "pid": 265,
            "code": 2229
          },
          {
            "name": "扎鲁特旗",
            "pid": 265,
            "code": 2230
          }
        ]
      },
      {
        "name": "乌海",
        "pid": 19,
        "code": 266,
        "sub": [
          {
            "name": "海勃湾区",
            "pid": 266,
            "code": 2231
          },
          {
            "name": "乌达区",
            "pid": 266,
            "code": 2232
          },
          {
            "name": "海南区",
            "pid": 266,
            "code": 2233
          }
        ]
      },
      {
        "name": "乌兰察布市",
        "pid": 19,
        "code": 267,
        "sub": [
          {
            "name": "化德县",
            "pid": 267,
            "code": 2234
          },
          {
            "name": "集宁区",
            "pid": 267,
            "code": 2235
          },
          {
            "name": "丰镇市",
            "pid": 267,
            "code": 2236
          },
          {
            "name": "卓资县",
            "pid": 267,
            "code": 2237
          },
          {
            "name": "商都县",
            "pid": 267,
            "code": 2238
          },
          {
            "name": "兴和县",
            "pid": 267,
            "code": 2239
          },
          {
            "name": "凉城县",
            "pid": 267,
            "code": 2240
          },
          {
            "name": "察哈尔右翼前旗",
            "pid": 267,
            "code": 2241
          },
          {
            "name": "察哈尔右翼中旗",
            "pid": 267,
            "code": 2242
          },
          {
            "name": "察哈尔右翼后旗",
            "pid": 267,
            "code": 2243
          },
          {
            "name": "四子王旗",
            "pid": 267,
            "code": 2244
          }
        ]
      },
      {
        "name": "锡林郭勒盟",
        "pid": 19,
        "code": 268,
        "sub": [
          {
            "name": "二连浩特市",
            "pid": 268,
            "code": 2245
          },
          {
            "name": "锡林浩特市",
            "pid": 268,
            "code": 2246
          },
          {
            "name": "阿巴嘎旗",
            "pid": 268,
            "code": 2247
          },
          {
            "name": "苏尼特左旗",
            "pid": 268,
            "code": 2248
          },
          {
            "name": "苏尼特右旗",
            "pid": 268,
            "code": 2249
          },
          {
            "name": "东乌珠穆沁旗",
            "pid": 268,
            "code": 2250
          },
          {
            "name": "西乌珠穆沁旗",
            "pid": 268,
            "code": 2251
          },
          {
            "name": "太仆寺旗",
            "pid": 268,
            "code": 2252
          },
          {
            "name": "镶黄旗",
            "pid": 268,
            "code": 2253
          },
          {
            "name": "正镶白旗",
            "pid": 268,
            "code": 2254
          },
          {
            "name": "正蓝旗",
            "pid": 268,
            "code": 2255
          },
          {
            "name": "多伦县",
            "pid": 268,
            "code": 2256
          }
        ]
      },
      {
        "name": "兴安盟",
        "pid": 19,
        "code": 269,
        "sub": [
          {
            "name": "乌兰浩特市",
            "pid": 269,
            "code": 2257
          },
          {
            "name": "阿尔山市",
            "pid": 269,
            "code": 2258
          },
          {
            "name": "科尔沁右翼前旗",
            "pid": 269,
            "code": 2259
          },
          {
            "name": "科尔沁右翼中旗",
            "pid": 269,
            "code": 2260
          },
          {
            "name": "扎赉特旗",
            "pid": 269,
            "code": 2261
          },
          {
            "name": "突泉县",
            "pid": 269,
            "code": 2262
          }
        ]
      }
    ]
  },
  {
    "name": "宁夏",
    "code": 20,
    "sub": [
      {
        "name": "银川",
        "pid": 20,
        "code": 270,
        "sub": [
          {
            "name": "西夏区",
            "pid": 270,
            "code": 2263
          },
          {
            "name": "金凤区",
            "pid": 270,
            "code": 2264
          },
          {
            "name": "兴庆区",
            "pid": 270,
            "code": 2265
          },
          {
            "name": "灵武市",
            "pid": 270,
            "code": 2266
          },
          {
            "name": "永宁县",
            "pid": 270,
            "code": 2267
          },
          {
            "name": "贺兰县",
            "pid": 270,
            "code": 2268
          }
        ]
      },
      {
        "name": "固原",
        "pid": 20,
        "code": 271,
        "sub": [
          {
            "name": "原州区",
            "pid": 271,
            "code": 2269
          },
          {
            "name": "海原县",
            "pid": 271,
            "code": 2270
          },
          {
            "name": "西吉县",
            "pid": 271,
            "code": 2271
          },
          {
            "name": "隆德县",
            "pid": 271,
            "code": 2272
          },
          {
            "name": "泾源县",
            "pid": 271,
            "code": 2273
          },
          {
            "name": "彭阳县",
            "pid": 271,
            "code": 2274
          }
        ]
      },
      {
        "name": "石嘴山",
        "pid": 20,
        "code": 272,
        "sub": [
          {
            "name": "惠农县",
            "pid": 272,
            "code": 2275
          },
          {
            "name": "大武口区",
            "pid": 272,
            "code": 2276
          },
          {
            "name": "惠农区",
            "pid": 272,
            "code": 2277
          },
          {
            "name": "陶乐县",
            "pid": 272,
            "code": 2278
          },
          {
            "name": "平罗县",
            "pid": 272,
            "code": 2279
          }
        ]
      },
      {
        "name": "吴忠",
        "pid": 20,
        "code": 273,
        "sub": [
          {
            "name": "利通区",
            "pid": 273,
            "code": 2280
          },
          {
            "name": "中卫县",
            "pid": 273,
            "code": 2281
          },
          {
            "name": "青铜峡市",
            "pid": 273,
            "code": 2282
          },
          {
            "name": "中宁县",
            "pid": 273,
            "code": 2283
          },
          {
            "name": "盐池县",
            "pid": 273,
            "code": 2284
          },
          {
            "name": "同心县",
            "pid": 273,
            "code": 2285
          }
        ]
      },
      {
        "name": "中卫",
        "pid": 20,
        "code": 274,
        "sub": [
          {
            "name": "沙坡头区",
            "pid": 274,
            "code": 2286
          },
          {
            "name": "海原县",
            "pid": 274,
            "code": 2287
          },
          {
            "name": "中宁县",
            "pid": 274,
            "code": 2288
          }
        ]
      }
    ]
  },
  {
    "name": "青海",
    "code": 21,
    "sub": [
      {
        "name": "西宁",
        "pid": 21,
        "code": 275,
        "sub": [
          {
            "name": "城中区",
            "pid": 275,
            "code": 2289
          },
          {
            "name": "城东区",
            "pid": 275,
            "code": 2290
          },
          {
            "name": "城西区",
            "pid": 275,
            "code": 2291
          },
          {
            "name": "城北区",
            "pid": 275,
            "code": 2292
          },
          {
            "name": "湟中县",
            "pid": 275,
            "code": 2293
          },
          {
            "name": "湟源县",
            "pid": 275,
            "code": 2294
          },
          {
            "name": "大通",
            "pid": 275,
            "code": 2295
          }
        ]
      },
      {
        "name": "果洛",
        "pid": 21,
        "code": 276,
        "sub": [
          {
            "name": "玛沁县",
            "pid": 276,
            "code": 2296
          },
          {
            "name": "班玛县",
            "pid": 276,
            "code": 2297
          },
          {
            "name": "甘德县",
            "pid": 276,
            "code": 2298
          },
          {
            "name": "达日县",
            "pid": 276,
            "code": 2299
          },
          {
            "name": "久治县",
            "pid": 276,
            "code": 2300
          },
          {
            "name": "玛多县",
            "pid": 276,
            "code": 2301
          }
        ]
      },
      {
        "name": "海北",
        "pid": 21,
        "code": 277,
        "sub": [
          {
            "name": "海晏县",
            "pid": 277,
            "code": 2302
          },
          {
            "name": "祁连县",
            "pid": 277,
            "code": 2303
          },
          {
            "name": "刚察县",
            "pid": 277,
            "code": 2304
          },
          {
            "name": "门源",
            "pid": 277,
            "code": 2305
          }
        ]
      },
      {
        "name": "海东",
        "pid": 21,
        "code": 278,
        "sub": [
          {
            "name": "平安县",
            "pid": 278,
            "code": 2306
          },
          {
            "name": "乐都县",
            "pid": 278,
            "code": 2307
          },
          {
            "name": "民和",
            "pid": 278,
            "code": 2308
          },
          {
            "name": "互助",
            "pid": 278,
            "code": 2309
          },
          {
            "name": "化隆",
            "pid": 278,
            "code": 2310
          },
          {
            "name": "循化",
            "pid": 278,
            "code": 2311
          }
        ]
      },
      {
        "name": "海南",
        "pid": 21,
        "code": 279,
        "sub": [
          {
            "name": "共和县",
            "pid": 279,
            "code": 2312
          },
          {
            "name": "同德县",
            "pid": 279,
            "code": 2313
          },
          {
            "name": "贵德县",
            "pid": 279,
            "code": 2314
          },
          {
            "name": "兴海县",
            "pid": 279,
            "code": 2315
          },
          {
            "name": "贵南县",
            "pid": 279,
            "code": 2316
          }
        ]
      },
      {
        "name": "海西",
        "pid": 21,
        "code": 280,
        "sub": [
          {
            "name": "德令哈市",
            "pid": 280,
            "code": 2317
          },
          {
            "name": "格尔木市",
            "pid": 280,
            "code": 2318
          },
          {
            "name": "乌兰县",
            "pid": 280,
            "code": 2319
          },
          {
            "name": "都兰县",
            "pid": 280,
            "code": 2320
          },
          {
            "name": "天峻县",
            "pid": 280,
            "code": 2321
          }
        ]
      },
      {
        "name": "黄南",
        "pid": 21,
        "code": 281,
        "sub": [
          {
            "name": "同仁县",
            "pid": 281,
            "code": 2322
          },
          {
            "name": "尖扎县",
            "pid": 281,
            "code": 2323
          },
          {
            "name": "泽库县",
            "pid": 281,
            "code": 2324
          },
          {
            "name": "河南蒙古族自治县",
            "pid": 281,
            "code": 2325
          }
        ]
      },
      {
        "name": "玉树",
        "pid": 21,
        "code": 282,
        "sub": [
          {
            "name": "玉树县",
            "pid": 282,
            "code": 2326
          },
          {
            "name": "杂多县",
            "pid": 282,
            "code": 2327
          },
          {
            "name": "称多县",
            "pid": 282,
            "code": 2328
          },
          {
            "name": "治多县",
            "pid": 282,
            "code": 2329
          },
          {
            "name": "囊谦县",
            "pid": 282,
            "code": 2330
          },
          {
            "name": "曲麻莱县",
            "pid": 282,
            "code": 2331
          }
        ]
      }
    ]
  },
  {
    "name": "山东",
    "code": 22,
    "sub": [
      {
        "name": "济南",
        "pid": 22,
        "code": 283,
        "sub": [
          {
            "name": "市中区",
            "pid": 283,
            "code": 2332
          },
          {
            "name": "历下区",
            "pid": 283,
            "code": 2333
          },
          {
            "name": "天桥区",
            "pid": 283,
            "code": 2334
          },
          {
            "name": "槐荫区",
            "pid": 283,
            "code": 2335
          },
          {
            "name": "历城区",
            "pid": 283,
            "code": 2336
          },
          {
            "name": "长清区",
            "pid": 283,
            "code": 2337
          },
          {
            "name": "章丘市",
            "pid": 283,
            "code": 2338
          },
          {
            "name": "平阴县",
            "pid": 283,
            "code": 2339
          },
          {
            "name": "济阳县",
            "pid": 283,
            "code": 2340
          },
          {
            "name": "商河县",
            "pid": 283,
            "code": 2341
          }
        ]
      },
      {
        "name": "青岛",
        "pid": 22,
        "code": 284,
        "sub": [
          {
            "name": "市南区",
            "pid": 284,
            "code": 2342
          },
          {
            "name": "市北区",
            "pid": 284,
            "code": 2343
          },
          {
            "name": "城阳区",
            "pid": 284,
            "code": 2344
          },
          {
            "name": "四方区",
            "pid": 284,
            "code": 2345
          },
          {
            "name": "李沧区",
            "pid": 284,
            "code": 2346
          },
          {
            "name": "黄岛区",
            "pid": 284,
            "code": 2347
          },
          {
            "name": "崂山区",
            "pid": 284,
            "code": 2348
          },
          {
            "name": "胶州市",
            "pid": 284,
            "code": 2349
          },
          {
            "name": "即墨市",
            "pid": 284,
            "code": 2350
          },
          {
            "name": "平度市",
            "pid": 284,
            "code": 2351
          },
          {
            "name": "胶南市",
            "pid": 284,
            "code": 2352
          },
          {
            "name": "莱西市",
            "pid": 284,
            "code": 2353
          }
        ]
      },
      {
        "name": "滨州",
        "pid": 22,
        "code": 285,
        "sub": [
          {
            "name": "滨城区",
            "pid": 285,
            "code": 2354
          },
          {
            "name": "惠民县",
            "pid": 285,
            "code": 2355
          },
          {
            "name": "阳信县",
            "pid": 285,
            "code": 2356
          },
          {
            "name": "无棣县",
            "pid": 285,
            "code": 2357
          },
          {
            "name": "沾化县",
            "pid": 285,
            "code": 2358
          },
          {
            "name": "博兴县",
            "pid": 285,
            "code": 2359
          },
          {
            "name": "邹平县",
            "pid": 285,
            "code": 2360
          }
        ]
      },
      {
        "name": "德州",
        "pid": 22,
        "code": 286,
        "sub": [
          {
            "name": "德城区",
            "pid": 286,
            "code": 2361
          },
          {
            "name": "陵县",
            "pid": 286,
            "code": 2362
          },
          {
            "name": "乐陵市",
            "pid": 286,
            "code": 2363
          },
          {
            "name": "禹城市",
            "pid": 286,
            "code": 2364
          },
          {
            "name": "宁津县",
            "pid": 286,
            "code": 2365
          },
          {
            "name": "庆云县",
            "pid": 286,
            "code": 2366
          },
          {
            "name": "临邑县",
            "pid": 286,
            "code": 2367
          },
          {
            "name": "齐河县",
            "pid": 286,
            "code": 2368
          },
          {
            "name": "平原县",
            "pid": 286,
            "code": 2369
          },
          {
            "name": "夏津县",
            "pid": 286,
            "code": 2370
          },
          {
            "name": "武城县",
            "pid": 286,
            "code": 2371
          }
        ]
      },
      {
        "name": "东营",
        "pid": 22,
        "code": 287,
        "sub": [
          {
            "name": "东营区",
            "pid": 287,
            "code": 2372
          },
          {
            "name": "河口区",
            "pid": 287,
            "code": 2373
          },
          {
            "name": "垦利县",
            "pid": 287,
            "code": 2374
          },
          {
            "name": "利津县",
            "pid": 287,
            "code": 2375
          },
          {
            "name": "广饶县",
            "pid": 287,
            "code": 2376
          }
        ]
      },
      {
        "name": "菏泽",
        "pid": 22,
        "code": 288,
        "sub": [
          {
            "name": "牡丹区",
            "pid": 288,
            "code": 2377
          },
          {
            "name": "曹县",
            "pid": 288,
            "code": 2378
          },
          {
            "name": "单县",
            "pid": 288,
            "code": 2379
          },
          {
            "name": "成武县",
            "pid": 288,
            "code": 2380
          },
          {
            "name": "巨野县",
            "pid": 288,
            "code": 2381
          },
          {
            "name": "郓城县",
            "pid": 288,
            "code": 2382
          },
          {
            "name": "鄄城县",
            "pid": 288,
            "code": 2383
          },
          {
            "name": "定陶县",
            "pid": 288,
            "code": 2384
          },
          {
            "name": "东明县",
            "pid": 288,
            "code": 2385
          }
        ]
      },
      {
        "name": "济宁",
        "pid": 22,
        "code": 289,
        "sub": [
          {
            "name": "市中区",
            "pid": 289,
            "code": 2386
          },
          {
            "name": "任城区",
            "pid": 289,
            "code": 2387
          },
          {
            "name": "曲阜市",
            "pid": 289,
            "code": 2388
          },
          {
            "name": "兖州市",
            "pid": 289,
            "code": 2389
          },
          {
            "name": "邹城市",
            "pid": 289,
            "code": 2390
          },
          {
            "name": "微山县",
            "pid": 289,
            "code": 2391
          },
          {
            "name": "鱼台县",
            "pid": 289,
            "code": 2392
          },
          {
            "name": "金乡县",
            "pid": 289,
            "code": 2393
          },
          {
            "name": "嘉祥县",
            "pid": 289,
            "code": 2394
          },
          {
            "name": "汶上县",
            "pid": 289,
            "code": 2395
          },
          {
            "name": "泗水县",
            "pid": 289,
            "code": 2396
          },
          {
            "name": "梁山县",
            "pid": 289,
            "code": 2397
          }
        ]
      },
      {
        "name": "莱芜",
        "pid": 22,
        "code": 290,
        "sub": [
          {
            "name": "莱城区",
            "pid": 290,
            "code": 2398
          },
          {
            "name": "钢城区",
            "pid": 290,
            "code": 2399
          }
        ]
      },
      {
        "name": "聊城",
        "pid": 22,
        "code": 291,
        "sub": [
          {
            "name": "东昌府区",
            "pid": 291,
            "code": 2400
          },
          {
            "name": "临清市",
            "pid": 291,
            "code": 2401
          },
          {
            "name": "阳谷县",
            "pid": 291,
            "code": 2402
          },
          {
            "name": "莘县",
            "pid": 291,
            "code": 2403
          },
          {
            "name": "茌平县",
            "pid": 291,
            "code": 2404
          },
          {
            "name": "东阿县",
            "pid": 291,
            "code": 2405
          },
          {
            "name": "冠县",
            "pid": 291,
            "code": 2406
          },
          {
            "name": "高唐县",
            "pid": 291,
            "code": 2407
          }
        ]
      },
      {
        "name": "临沂",
        "pid": 22,
        "code": 292,
        "sub": [
          {
            "name": "兰山区",
            "pid": 292,
            "code": 2408
          },
          {
            "name": "罗庄区",
            "pid": 292,
            "code": 2409
          },
          {
            "name": "河东区",
            "pid": 292,
            "code": 2410
          },
          {
            "name": "沂南县",
            "pid": 292,
            "code": 2411
          },
          {
            "name": "郯城县",
            "pid": 292,
            "code": 2412
          },
          {
            "name": "沂水县",
            "pid": 292,
            "code": 2413
          },
          {
            "name": "苍山县",
            "pid": 292,
            "code": 2414
          },
          {
            "name": "费县",
            "pid": 292,
            "code": 2415
          },
          {
            "name": "平邑县",
            "pid": 292,
            "code": 2416
          },
          {
            "name": "莒南县",
            "pid": 292,
            "code": 2417
          },
          {
            "name": "蒙阴县",
            "pid": 292,
            "code": 2418
          },
          {
            "name": "临沭县",
            "pid": 292,
            "code": 2419
          }
        ]
      },
      {
        "name": "日照",
        "pid": 22,
        "code": 293,
        "sub": [
          {
            "name": "东港区",
            "pid": 293,
            "code": 2420
          },
          {
            "name": "岚山区",
            "pid": 293,
            "code": 2421
          },
          {
            "name": "五莲县",
            "pid": 293,
            "code": 2422
          },
          {
            "name": "莒县",
            "pid": 293,
            "code": 2423
          }
        ]
      },
      {
        "name": "泰安",
        "pid": 22,
        "code": 294,
        "sub": [
          {
            "name": "泰山区",
            "pid": 294,
            "code": 2424
          },
          {
            "name": "岱岳区",
            "pid": 294,
            "code": 2425
          },
          {
            "name": "新泰市",
            "pid": 294,
            "code": 2426
          },
          {
            "name": "肥城市",
            "pid": 294,
            "code": 2427
          },
          {
            "name": "宁阳县",
            "pid": 294,
            "code": 2428
          },
          {
            "name": "东平县",
            "pid": 294,
            "code": 2429
          }
        ]
      },
      {
        "name": "威海",
        "pid": 22,
        "code": 295,
        "sub": [
          {
            "name": "荣成市",
            "pid": 295,
            "code": 2430
          },
          {
            "name": "乳山市",
            "pid": 295,
            "code": 2431
          },
          {
            "name": "环翠区",
            "pid": 295,
            "code": 2432
          },
          {
            "name": "文登市",
            "pid": 295,
            "code": 2433
          }
        ]
      },
      {
        "name": "潍坊",
        "pid": 22,
        "code": 296,
        "sub": [
          {
            "name": "潍城区",
            "pid": 296,
            "code": 2434
          },
          {
            "name": "寒亭区",
            "pid": 296,
            "code": 2435
          },
          {
            "name": "坊子区",
            "pid": 296,
            "code": 2436
          },
          {
            "name": "奎文区",
            "pid": 296,
            "code": 2437
          },
          {
            "name": "青州市",
            "pid": 296,
            "code": 2438
          },
          {
            "name": "诸城市",
            "pid": 296,
            "code": 2439
          },
          {
            "name": "寿光市",
            "pid": 296,
            "code": 2440
          },
          {
            "name": "安丘市",
            "pid": 296,
            "code": 2441
          },
          {
            "name": "高密市",
            "pid": 296,
            "code": 2442
          },
          {
            "name": "昌邑市",
            "pid": 296,
            "code": 2443
          },
          {
            "name": "临朐县",
            "pid": 296,
            "code": 2444
          },
          {
            "name": "昌乐县",
            "pid": 296,
            "code": 2445
          }
        ]
      },
      {
        "name": "烟台",
        "pid": 22,
        "code": 297,
        "sub": [
          {
            "name": "芝罘区",
            "pid": 297,
            "code": 2446
          },
          {
            "name": "福山区",
            "pid": 297,
            "code": 2447
          },
          {
            "name": "牟平区",
            "pid": 297,
            "code": 2448
          },
          {
            "name": "莱山区",
            "pid": 297,
            "code": 2449
          },
          {
            "name": "开发区",
            "pid": 297,
            "code": 2450
          },
          {
            "name": "龙口市",
            "pid": 297,
            "code": 2451
          },
          {
            "name": "莱阳市",
            "pid": 297,
            "code": 2452
          },
          {
            "name": "莱州市",
            "pid": 297,
            "code": 2453
          },
          {
            "name": "蓬莱市",
            "pid": 297,
            "code": 2454
          },
          {
            "name": "招远市",
            "pid": 297,
            "code": 2455
          },
          {
            "name": "栖霞市",
            "pid": 297,
            "code": 2456
          },
          {
            "name": "海阳市",
            "pid": 297,
            "code": 2457
          },
          {
            "name": "长岛县",
            "pid": 297,
            "code": 2458
          }
        ]
      },
      {
        "name": "枣庄",
        "pid": 22,
        "code": 298,
        "sub": [
          {
            "name": "市中区",
            "pid": 298,
            "code": 2459
          },
          {
            "name": "山亭区",
            "pid": 298,
            "code": 2460
          },
          {
            "name": "峄城区",
            "pid": 298,
            "code": 2461
          },
          {
            "name": "台儿庄区",
            "pid": 298,
            "code": 2462
          },
          {
            "name": "薛城区",
            "pid": 298,
            "code": 2463
          },
          {
            "name": "滕州市",
            "pid": 298,
            "code": 2464
          }
        ]
      },
      {
        "name": "淄博",
        "pid": 22,
        "code": 299,
        "sub": [
          {
            "name": "张店区",
            "pid": 299,
            "code": 2465
          },
          {
            "name": "临淄区",
            "pid": 299,
            "code": 2466
          },
          {
            "name": "淄川区",
            "pid": 299,
            "code": 2467
          },
          {
            "name": "博山区",
            "pid": 299,
            "code": 2468
          },
          {
            "name": "周村区",
            "pid": 299,
            "code": 2469
          },
          {
            "name": "桓台县",
            "pid": 299,
            "code": 2470
          },
          {
            "name": "高青县",
            "pid": 299,
            "code": 2471
          },
          {
            "name": "沂源县",
            "pid": 299,
            "code": 2472
          }
        ]
      }
    ]
  },
  {
    "name": "山西",
    "code": 23,
    "sub": [
      {
        "name": "太原",
        "pid": 23,
        "code": 300,
        "sub": [
          {
            "name": "杏花岭区",
            "pid": 300,
            "code": 2473
          },
          {
            "name": "小店区",
            "pid": 300,
            "code": 2474
          },
          {
            "name": "迎泽区",
            "pid": 300,
            "code": 2475
          },
          {
            "name": "尖草坪区",
            "pid": 300,
            "code": 2476
          },
          {
            "name": "万柏林区",
            "pid": 300,
            "code": 2477
          },
          {
            "name": "晋源区",
            "pid": 300,
            "code": 2478
          },
          {
            "name": "高新开发区",
            "pid": 300,
            "code": 2479
          },
          {
            "name": "民营经济开发区",
            "pid": 300,
            "code": 2480
          },
          {
            "name": "经济技术开发区",
            "pid": 300,
            "code": 2481
          },
          {
            "name": "清徐县",
            "pid": 300,
            "code": 2482
          },
          {
            "name": "阳曲县",
            "pid": 300,
            "code": 2483
          },
          {
            "name": "娄烦县",
            "pid": 300,
            "code": 2484
          },
          {
            "name": "古交市",
            "pid": 300,
            "code": 2485
          }
        ]
      },
      {
        "name": "长治",
        "pid": 23,
        "code": 301,
        "sub": [
          {
            "name": "城区",
            "pid": 301,
            "code": 2486
          },
          {
            "name": "郊区",
            "pid": 301,
            "code": 2487
          },
          {
            "name": "沁县",
            "pid": 301,
            "code": 2488
          },
          {
            "name": "潞城市",
            "pid": 301,
            "code": 2489
          },
          {
            "name": "长治县",
            "pid": 301,
            "code": 2490
          },
          {
            "name": "襄垣县",
            "pid": 301,
            "code": 2491
          },
          {
            "name": "屯留县",
            "pid": 301,
            "code": 2492
          },
          {
            "name": "平顺县",
            "pid": 301,
            "code": 2493
          },
          {
            "name": "黎城县",
            "pid": 301,
            "code": 2494
          },
          {
            "name": "壶关县",
            "pid": 301,
            "code": 2495
          },
          {
            "name": "长子县",
            "pid": 301,
            "code": 2496
          },
          {
            "name": "武乡县",
            "pid": 301,
            "code": 2497
          },
          {
            "name": "沁源县",
            "pid": 301,
            "code": 2498
          }
        ]
      },
      {
        "name": "大同",
        "pid": 23,
        "code": 302,
        "sub": [
          {
            "name": "城区",
            "pid": 302,
            "code": 2499
          },
          {
            "name": "矿区",
            "pid": 302,
            "code": 2500
          },
          {
            "name": "南郊区",
            "pid": 302,
            "code": 2501
          },
          {
            "name": "新荣区",
            "pid": 302,
            "code": 2502
          },
          {
            "name": "阳高县",
            "pid": 302,
            "code": 2503
          },
          {
            "name": "天镇县",
            "pid": 302,
            "code": 2504
          },
          {
            "name": "广灵县",
            "pid": 302,
            "code": 2505
          },
          {
            "name": "灵丘县",
            "pid": 302,
            "code": 2506
          },
          {
            "name": "浑源县",
            "pid": 302,
            "code": 2507
          },
          {
            "name": "左云县",
            "pid": 302,
            "code": 2508
          },
          {
            "name": "大同县",
            "pid": 302,
            "code": 2509
          }
        ]
      },
      {
        "name": "晋城",
        "pid": 23,
        "code": 303,
        "sub": [
          {
            "name": "城区",
            "pid": 303,
            "code": 2510
          },
          {
            "name": "高平市",
            "pid": 303,
            "code": 2511
          },
          {
            "name": "沁水县",
            "pid": 303,
            "code": 2512
          },
          {
            "name": "阳城县",
            "pid": 303,
            "code": 2513
          },
          {
            "name": "陵川县",
            "pid": 303,
            "code": 2514
          },
          {
            "name": "泽州县",
            "pid": 303,
            "code": 2515
          }
        ]
      },
      {
        "name": "晋中",
        "pid": 23,
        "code": 304,
        "sub": [
          {
            "name": "榆次区",
            "pid": 304,
            "code": 2516
          },
          {
            "name": "介休市",
            "pid": 304,
            "code": 2517
          },
          {
            "name": "榆社县",
            "pid": 304,
            "code": 2518
          },
          {
            "name": "左权县",
            "pid": 304,
            "code": 2519
          },
          {
            "name": "和顺县",
            "pid": 304,
            "code": 2520
          },
          {
            "name": "昔阳县",
            "pid": 304,
            "code": 2521
          },
          {
            "name": "寿阳县",
            "pid": 304,
            "code": 2522
          },
          {
            "name": "太谷县",
            "pid": 304,
            "code": 2523
          },
          {
            "name": "祁县",
            "pid": 304,
            "code": 2524
          },
          {
            "name": "平遥县",
            "pid": 304,
            "code": 2525
          },
          {
            "name": "灵石县",
            "pid": 304,
            "code": 2526
          }
        ]
      },
      {
        "name": "临汾",
        "pid": 23,
        "code": 305,
        "sub": [
          {
            "name": "尧都区",
            "pid": 305,
            "code": 2527
          },
          {
            "name": "侯马市",
            "pid": 305,
            "code": 2528
          },
          {
            "name": "霍州市",
            "pid": 305,
            "code": 2529
          },
          {
            "name": "曲沃县",
            "pid": 305,
            "code": 2530
          },
          {
            "name": "翼城县",
            "pid": 305,
            "code": 2531
          },
          {
            "name": "襄汾县",
            "pid": 305,
            "code": 2532
          },
          {
            "name": "洪洞县",
            "pid": 305,
            "code": 2533
          },
          {
            "name": "吉县",
            "pid": 305,
            "code": 2534
          },
          {
            "name": "安泽县",
            "pid": 305,
            "code": 2535
          },
          {
            "name": "浮山县",
            "pid": 305,
            "code": 2536
          },
          {
            "name": "古县",
            "pid": 305,
            "code": 2537
          },
          {
            "name": "乡宁县",
            "pid": 305,
            "code": 2538
          },
          {
            "name": "大宁县",
            "pid": 305,
            "code": 2539
          },
          {
            "name": "隰县",
            "pid": 305,
            "code": 2540
          },
          {
            "name": "永和县",
            "pid": 305,
            "code": 2541
          },
          {
            "name": "蒲县",
            "pid": 305,
            "code": 2542
          },
          {
            "name": "汾西县",
            "pid": 305,
            "code": 2543
          }
        ]
      },
      {
        "name": "吕梁",
        "pid": 23,
        "code": 306,
        "sub": [
          {
            "name": "离石市",
            "pid": 306,
            "code": 2544
          },
          {
            "name": "离石区",
            "pid": 306,
            "code": 2545
          },
          {
            "name": "孝义市",
            "pid": 306,
            "code": 2546
          },
          {
            "name": "汾阳市",
            "pid": 306,
            "code": 2547
          },
          {
            "name": "文水县",
            "pid": 306,
            "code": 2548
          },
          {
            "name": "交城县",
            "pid": 306,
            "code": 2549
          },
          {
            "name": "兴县",
            "pid": 306,
            "code": 2550
          },
          {
            "name": "临县",
            "pid": 306,
            "code": 2551
          },
          {
            "name": "柳林县",
            "pid": 306,
            "code": 2552
          },
          {
            "name": "石楼县",
            "pid": 306,
            "code": 2553
          },
          {
            "name": "岚县",
            "pid": 306,
            "code": 2554
          },
          {
            "name": "方山县",
            "pid": 306,
            "code": 2555
          },
          {
            "name": "中阳县",
            "pid": 306,
            "code": 2556
          },
          {
            "name": "交口县",
            "pid": 306,
            "code": 2557
          }
        ]
      },
      {
        "name": "朔州",
        "pid": 23,
        "code": 307,
        "sub": [
          {
            "name": "朔城区",
            "pid": 307,
            "code": 2558
          },
          {
            "name": "平鲁区",
            "pid": 307,
            "code": 2559
          },
          {
            "name": "山阴县",
            "pid": 307,
            "code": 2560
          },
          {
            "name": "应县",
            "pid": 307,
            "code": 2561
          },
          {
            "name": "右玉县",
            "pid": 307,
            "code": 2562
          },
          {
            "name": "怀仁县",
            "pid": 307,
            "code": 2563
          }
        ]
      },
      {
        "name": "忻州",
        "pid": 23,
        "code": 308,
        "sub": [
          {
            "name": "忻府区",
            "pid": 308,
            "code": 2564
          },
          {
            "name": "原平市",
            "pid": 308,
            "code": 2565
          },
          {
            "name": "定襄县",
            "pid": 308,
            "code": 2566
          },
          {
            "name": "五台县",
            "pid": 308,
            "code": 2567
          },
          {
            "name": "代县",
            "pid": 308,
            "code": 2568
          },
          {
            "name": "繁峙县",
            "pid": 308,
            "code": 2569
          },
          {
            "name": "宁武县",
            "pid": 308,
            "code": 2570
          },
          {
            "name": "静乐县",
            "pid": 308,
            "code": 2571
          },
          {
            "name": "神池县",
            "pid": 308,
            "code": 2572
          },
          {
            "name": "五寨县",
            "pid": 308,
            "code": 2573
          },
          {
            "name": "岢岚县",
            "pid": 308,
            "code": 2574
          },
          {
            "name": "河曲县",
            "pid": 308,
            "code": 2575
          },
          {
            "name": "保德县",
            "pid": 308,
            "code": 2576
          },
          {
            "name": "偏关县",
            "pid": 308,
            "code": 2577
          }
        ]
      },
      {
        "name": "阳泉",
        "pid": 23,
        "code": 309,
        "sub": [
          {
            "name": "城区",
            "pid": 309,
            "code": 2578
          },
          {
            "name": "矿区",
            "pid": 309,
            "code": 2579
          },
          {
            "name": "郊区",
            "pid": 309,
            "code": 2580
          },
          {
            "name": "平定县",
            "pid": 309,
            "code": 2581
          },
          {
            "name": "盂县",
            "pid": 309,
            "code": 2582
          }
        ]
      },
      {
        "name": "运城",
        "pid": 23,
        "code": 310,
        "sub": [
          {
            "name": "盐湖区",
            "pid": 310,
            "code": 2583
          },
          {
            "name": "永济市",
            "pid": 310,
            "code": 2584
          },
          {
            "name": "河津市",
            "pid": 310,
            "code": 2585
          },
          {
            "name": "临猗县",
            "pid": 310,
            "code": 2586
          },
          {
            "name": "万荣县",
            "pid": 310,
            "code": 2587
          },
          {
            "name": "闻喜县",
            "pid": 310,
            "code": 2588
          },
          {
            "name": "稷山县",
            "pid": 310,
            "code": 2589
          },
          {
            "name": "新绛县",
            "pid": 310,
            "code": 2590
          },
          {
            "name": "绛县",
            "pid": 310,
            "code": 2591
          },
          {
            "name": "垣曲县",
            "pid": 310,
            "code": 2592
          },
          {
            "name": "夏县",
            "pid": 310,
            "code": 2593
          },
          {
            "name": "平陆县",
            "pid": 310,
            "code": 2594
          },
          {
            "name": "芮城县",
            "pid": 310,
            "code": 2595
          }
        ]
      }
    ]
  },
  {
    "name": "陕西",
    "code": 24,
    "sub": [
      {
        "name": "西安",
        "pid": 24,
        "code": 311,
        "sub": [
          {
            "name": "莲湖区",
            "pid": 311,
            "code": 2596
          },
          {
            "name": "新城区",
            "pid": 311,
            "code": 2597
          },
          {
            "name": "碑林区",
            "pid": 311,
            "code": 2598
          },
          {
            "name": "雁塔区",
            "pid": 311,
            "code": 2599
          },
          {
            "name": "灞桥区",
            "pid": 311,
            "code": 2600
          },
          {
            "name": "未央区",
            "pid": 311,
            "code": 2601
          },
          {
            "name": "阎良区",
            "pid": 311,
            "code": 2602
          },
          {
            "name": "临潼区",
            "pid": 311,
            "code": 2603
          },
          {
            "name": "长安区",
            "pid": 311,
            "code": 2604
          },
          {
            "name": "蓝田县",
            "pid": 311,
            "code": 2605
          },
          {
            "name": "周至县",
            "pid": 311,
            "code": 2606
          },
          {
            "name": "户县",
            "pid": 311,
            "code": 2607
          },
          {
            "name": "高陵县",
            "pid": 311,
            "code": 2608
          }
        ]
      },
      {
        "name": "安康",
        "pid": 24,
        "code": 312,
        "sub": [
          {
            "name": "汉滨区",
            "pid": 312,
            "code": 2609
          },
          {
            "name": "汉阴县",
            "pid": 312,
            "code": 2610
          },
          {
            "name": "石泉县",
            "pid": 312,
            "code": 2611
          },
          {
            "name": "宁陕县",
            "pid": 312,
            "code": 2612
          },
          {
            "name": "紫阳县",
            "pid": 312,
            "code": 2613
          },
          {
            "name": "岚皋县",
            "pid": 312,
            "code": 2614
          },
          {
            "name": "平利县",
            "pid": 312,
            "code": 2615
          },
          {
            "name": "镇坪县",
            "pid": 312,
            "code": 2616
          },
          {
            "name": "旬阳县",
            "pid": 312,
            "code": 2617
          },
          {
            "name": "白河县",
            "pid": 312,
            "code": 2618
          }
        ]
      },
      {
        "name": "宝鸡",
        "pid": 24,
        "code": 313,
        "sub": [
          {
            "name": "陈仓区",
            "pid": 313,
            "code": 2619
          },
          {
            "name": "渭滨区",
            "pid": 313,
            "code": 2620
          },
          {
            "name": "金台区",
            "pid": 313,
            "code": 2621
          },
          {
            "name": "凤翔县",
            "pid": 313,
            "code": 2622
          },
          {
            "name": "岐山县",
            "pid": 313,
            "code": 2623
          },
          {
            "name": "扶风县",
            "pid": 313,
            "code": 2624
          },
          {
            "name": "眉县",
            "pid": 313,
            "code": 2625
          },
          {
            "name": "陇县",
            "pid": 313,
            "code": 2626
          },
          {
            "name": "千阳县",
            "pid": 313,
            "code": 2627
          },
          {
            "name": "麟游县",
            "pid": 313,
            "code": 2628
          },
          {
            "name": "凤县",
            "pid": 313,
            "code": 2629
          },
          {
            "name": "太白县",
            "pid": 313,
            "code": 2630
          }
        ]
      },
      {
        "name": "汉中",
        "pid": 24,
        "code": 314,
        "sub": [
          {
            "name": "汉台区",
            "pid": 314,
            "code": 2631
          },
          {
            "name": "南郑县",
            "pid": 314,
            "code": 2632
          },
          {
            "name": "城固县",
            "pid": 314,
            "code": 2633
          },
          {
            "name": "洋县",
            "pid": 314,
            "code": 2634
          },
          {
            "name": "西乡县",
            "pid": 314,
            "code": 2635
          },
          {
            "name": "勉县",
            "pid": 314,
            "code": 2636
          },
          {
            "name": "宁强县",
            "pid": 314,
            "code": 2637
          },
          {
            "name": "略阳县",
            "pid": 314,
            "code": 2638
          },
          {
            "name": "镇巴县",
            "pid": 314,
            "code": 2639
          },
          {
            "name": "留坝县",
            "pid": 314,
            "code": 2640
          },
          {
            "name": "佛坪县",
            "pid": 314,
            "code": 2641
          }
        ]
      },
      {
        "name": "商洛",
        "pid": 24,
        "code": 315,
        "sub": [
          {
            "name": "商州区",
            "pid": 315,
            "code": 2642
          },
          {
            "name": "洛南县",
            "pid": 315,
            "code": 2643
          },
          {
            "name": "丹凤县",
            "pid": 315,
            "code": 2644
          },
          {
            "name": "商南县",
            "pid": 315,
            "code": 2645
          },
          {
            "name": "山阳县",
            "pid": 315,
            "code": 2646
          },
          {
            "name": "镇安县",
            "pid": 315,
            "code": 2647
          },
          {
            "name": "柞水县",
            "pid": 315,
            "code": 2648
          }
        ]
      },
      {
        "name": "铜川",
        "pid": 24,
        "code": 316,
        "sub": [
          {
            "name": "耀州区",
            "pid": 316,
            "code": 2649
          },
          {
            "name": "王益区",
            "pid": 316,
            "code": 2650
          },
          {
            "name": "印台区",
            "pid": 316,
            "code": 2651
          },
          {
            "name": "宜君县",
            "pid": 316,
            "code": 2652
          }
        ]
      },
      {
        "name": "渭南",
        "pid": 24,
        "code": 317,
        "sub": [
          {
            "name": "临渭区",
            "pid": 317,
            "code": 2653
          },
          {
            "name": "韩城市",
            "pid": 317,
            "code": 2654
          },
          {
            "name": "华阴市",
            "pid": 317,
            "code": 2655
          },
          {
            "name": "华县",
            "pid": 317,
            "code": 2656
          },
          {
            "name": "潼关县",
            "pid": 317,
            "code": 2657
          },
          {
            "name": "大荔县",
            "pid": 317,
            "code": 2658
          },
          {
            "name": "合阳县",
            "pid": 317,
            "code": 2659
          },
          {
            "name": "澄城县",
            "pid": 317,
            "code": 2660
          },
          {
            "name": "蒲城县",
            "pid": 317,
            "code": 2661
          },
          {
            "name": "白水县",
            "pid": 317,
            "code": 2662
          },
          {
            "name": "富平县",
            "pid": 317,
            "code": 2663
          }
        ]
      },
      {
        "name": "咸阳",
        "pid": 24,
        "code": 318,
        "sub": [
          {
            "name": "秦都区",
            "pid": 318,
            "code": 2664
          },
          {
            "name": "渭城区",
            "pid": 318,
            "code": 2665
          },
          {
            "name": "杨陵区",
            "pid": 318,
            "code": 2666
          },
          {
            "name": "兴平市",
            "pid": 318,
            "code": 2667
          },
          {
            "name": "三原县",
            "pid": 318,
            "code": 2668
          },
          {
            "name": "泾阳县",
            "pid": 318,
            "code": 2669
          },
          {
            "name": "乾县",
            "pid": 318,
            "code": 2670
          },
          {
            "name": "礼泉县",
            "pid": 318,
            "code": 2671
          },
          {
            "name": "永寿县",
            "pid": 318,
            "code": 2672
          },
          {
            "name": "彬县",
            "pid": 318,
            "code": 2673
          },
          {
            "name": "长武县",
            "pid": 318,
            "code": 2674
          },
          {
            "name": "旬邑县",
            "pid": 318,
            "code": 2675
          },
          {
            "name": "淳化县",
            "pid": 318,
            "code": 2676
          },
          {
            "name": "武功县",
            "pid": 318,
            "code": 2677
          }
        ]
      },
      {
        "name": "延安",
        "pid": 24,
        "code": 319,
        "sub": [
          {
            "name": "吴起县",
            "pid": 319,
            "code": 2678
          },
          {
            "name": "宝塔区",
            "pid": 319,
            "code": 2679
          },
          {
            "name": "延长县",
            "pid": 319,
            "code": 2680
          },
          {
            "name": "延川县",
            "pid": 319,
            "code": 2681
          },
          {
            "name": "子长县",
            "pid": 319,
            "code": 2682
          },
          {
            "name": "安塞县",
            "pid": 319,
            "code": 2683
          },
          {
            "name": "志丹县",
            "pid": 319,
            "code": 2684
          },
          {
            "name": "甘泉县",
            "pid": 319,
            "code": 2685
          },
          {
            "name": "富县",
            "pid": 319,
            "code": 2686
          },
          {
            "name": "洛川县",
            "pid": 319,
            "code": 2687
          },
          {
            "name": "宜川县",
            "pid": 319,
            "code": 2688
          },
          {
            "name": "黄龙县",
            "pid": 319,
            "code": 2689
          },
          {
            "name": "黄陵县",
            "pid": 319,
            "code": 2690
          }
        ]
      },
      {
        "name": "榆林",
        "pid": 24,
        "code": 320,
        "sub": [
          {
            "name": "榆阳区",
            "pid": 320,
            "code": 2691
          },
          {
            "name": "神木县",
            "pid": 320,
            "code": 2692
          },
          {
            "name": "府谷县",
            "pid": 320,
            "code": 2693
          },
          {
            "name": "横山县",
            "pid": 320,
            "code": 2694
          },
          {
            "name": "靖边县",
            "pid": 320,
            "code": 2695
          },
          {
            "name": "定边县",
            "pid": 320,
            "code": 2696
          },
          {
            "name": "绥德县",
            "pid": 320,
            "code": 2697
          },
          {
            "name": "米脂县",
            "pid": 320,
            "code": 2698
          },
          {
            "name": "佳县",
            "pid": 320,
            "code": 2699
          },
          {
            "name": "吴堡县",
            "pid": 320,
            "code": 2700
          },
          {
            "name": "清涧县",
            "pid": 320,
            "code": 2701
          },
          {
            "name": "子洲县",
            "pid": 320,
            "code": 2702
          }
        ]
      }
    ]
  },
  {
    "name": "上海",
    "code": 25,
    "sub": [
      {
        "name": "上海",
        "pid": 25,
        "code": 321,
        "sub": [
          {
            "name": "长宁区",
            "pid": 321,
            "code": 2703
          },
          {
            "name": "闸北区",
            "pid": 321,
            "code": 2704
          },
          {
            "name": "闵行区",
            "pid": 321,
            "code": 2705
          },
          {
            "name": "徐汇区",
            "pid": 321,
            "code": 2706
          },
          {
            "name": "浦东新区",
            "pid": 321,
            "code": 2707
          },
          {
            "name": "杨浦区",
            "pid": 321,
            "code": 2708
          },
          {
            "name": "普陀区",
            "pid": 321,
            "code": 2709
          },
          {
            "name": "静安区",
            "pid": 321,
            "code": 2710
          },
          {
            "name": "卢湾区",
            "pid": 321,
            "code": 2711
          },
          {
            "name": "虹口区",
            "pid": 321,
            "code": 2712
          },
          {
            "name": "黄浦区",
            "pid": 321,
            "code": 2713
          },
          {
            "name": "南汇区",
            "pid": 321,
            "code": 2714
          },
          {
            "name": "松江区",
            "pid": 321,
            "code": 2715
          },
          {
            "name": "嘉定区",
            "pid": 321,
            "code": 2716
          },
          {
            "name": "宝山区",
            "pid": 321,
            "code": 2717
          },
          {
            "name": "青浦区",
            "pid": 321,
            "code": 2718
          },
          {
            "name": "金山区",
            "pid": 321,
            "code": 2719
          },
          {
            "name": "奉贤区",
            "pid": 321,
            "code": 2720
          },
          {
            "name": "崇明县",
            "pid": 321,
            "code": 2721
          }
        ]
      }
    ]
  },
  {
    "name": "四川",
    "code": 26,
    "sub": [
      {
        "name": "成都",
        "pid": 26,
        "code": 322,
        "sub": [
          {
            "name": "青羊区",
            "pid": 322,
            "code": 2722
          },
          {
            "name": "锦江区",
            "pid": 322,
            "code": 2723
          },
          {
            "name": "金牛区",
            "pid": 322,
            "code": 2724
          },
          {
            "name": "武侯区",
            "pid": 322,
            "code": 2725
          },
          {
            "name": "成华区",
            "pid": 322,
            "code": 2726
          },
          {
            "name": "龙泉驿区",
            "pid": 322,
            "code": 2727
          },
          {
            "name": "青白江区",
            "pid": 322,
            "code": 2728
          },
          {
            "name": "新都区",
            "pid": 322,
            "code": 2729
          },
          {
            "name": "温江区",
            "pid": 322,
            "code": 2730
          },
          {
            "name": "高新区",
            "pid": 322,
            "code": 2731
          },
          {
            "name": "高新西区",
            "pid": 322,
            "code": 2732
          },
          {
            "name": "都江堰市",
            "pid": 322,
            "code": 2733
          },
          {
            "name": "彭州市",
            "pid": 322,
            "code": 2734
          },
          {
            "name": "邛崃市",
            "pid": 322,
            "code": 2735
          },
          {
            "name": "崇州市",
            "pid": 322,
            "code": 2736
          },
          {
            "name": "金堂县",
            "pid": 322,
            "code": 2737
          },
          {
            "name": "双流县",
            "pid": 322,
            "code": 2738
          },
          {
            "name": "郫县",
            "pid": 322,
            "code": 2739
          },
          {
            "name": "大邑县",
            "pid": 322,
            "code": 2740
          },
          {
            "name": "蒲江县",
            "pid": 322,
            "code": 2741
          },
          {
            "name": "新津县",
            "pid": 322,
            "code": 2742
          },
          {
            "name": "都江堰市",
            "pid": 322,
            "code": 2743
          },
          {
            "name": "彭州市",
            "pid": 322,
            "code": 2744
          },
          {
            "name": "邛崃市",
            "pid": 322,
            "code": 2745
          },
          {
            "name": "崇州市",
            "pid": 322,
            "code": 2746
          },
          {
            "name": "金堂县",
            "pid": 322,
            "code": 2747
          },
          {
            "name": "双流县",
            "pid": 322,
            "code": 2748
          },
          {
            "name": "郫县",
            "pid": 322,
            "code": 2749
          },
          {
            "name": "大邑县",
            "pid": 322,
            "code": 2750
          },
          {
            "name": "蒲江县",
            "pid": 322,
            "code": 2751
          },
          {
            "name": "新津县",
            "pid": 322,
            "code": 2752
          }
        ]
      },
      {
        "name": "绵阳",
        "pid": 26,
        "code": 323,
        "sub": [
          {
            "name": "涪城区",
            "pid": 323,
            "code": 2753
          },
          {
            "name": "游仙区",
            "pid": 323,
            "code": 2754
          },
          {
            "name": "江油市",
            "pid": 323,
            "code": 2755
          },
          {
            "name": "盐亭县",
            "pid": 323,
            "code": 2756
          },
          {
            "name": "三台县",
            "pid": 323,
            "code": 2757
          },
          {
            "name": "平武县",
            "pid": 323,
            "code": 2758
          },
          {
            "name": "安县",
            "pid": 323,
            "code": 2759
          },
          {
            "name": "梓潼县",
            "pid": 323,
            "code": 2760
          },
          {
            "name": "北川县",
            "pid": 323,
            "code": 2761
          }
        ]
      },
      {
        "name": "阿坝",
        "pid": 26,
        "code": 324,
        "sub": [
          {
            "name": "马尔康县",
            "pid": 324,
            "code": 2762
          },
          {
            "name": "汶川县",
            "pid": 324,
            "code": 2763
          },
          {
            "name": "理县",
            "pid": 324,
            "code": 2764
          },
          {
            "name": "茂县",
            "pid": 324,
            "code": 2765
          },
          {
            "name": "松潘县",
            "pid": 324,
            "code": 2766
          },
          {
            "name": "九寨沟县",
            "pid": 324,
            "code": 2767
          },
          {
            "name": "金川县",
            "pid": 324,
            "code": 2768
          },
          {
            "name": "小金县",
            "pid": 324,
            "code": 2769
          },
          {
            "name": "黑水县",
            "pid": 324,
            "code": 2770
          },
          {
            "name": "壤塘县",
            "pid": 324,
            "code": 2771
          },
          {
            "name": "阿坝县",
            "pid": 324,
            "code": 2772
          },
          {
            "name": "若尔盖县",
            "pid": 324,
            "code": 2773
          },
          {
            "name": "红原县",
            "pid": 324,
            "code": 2774
          }
        ]
      },
      {
        "name": "巴中",
        "pid": 26,
        "code": 325,
        "sub": [
          {
            "name": "巴州区",
            "pid": 325,
            "code": 2775
          },
          {
            "name": "通江县",
            "pid": 325,
            "code": 2776
          },
          {
            "name": "南江县",
            "pid": 325,
            "code": 2777
          },
          {
            "name": "平昌县",
            "pid": 325,
            "code": 2778
          }
        ]
      },
      {
        "name": "达州",
        "pid": 26,
        "code": 326,
        "sub": [
          {
            "name": "通川区",
            "pid": 326,
            "code": 2779
          },
          {
            "name": "万源市",
            "pid": 326,
            "code": 2780
          },
          {
            "name": "达县",
            "pid": 326,
            "code": 2781
          },
          {
            "name": "宣汉县",
            "pid": 326,
            "code": 2782
          },
          {
            "name": "开江县",
            "pid": 326,
            "code": 2783
          },
          {
            "name": "大竹县",
            "pid": 326,
            "code": 2784
          },
          {
            "name": "渠县",
            "pid": 326,
            "code": 2785
          }
        ]
      },
      {
        "name": "德阳",
        "pid": 26,
        "code": 327,
        "sub": [
          {
            "name": "旌阳区",
            "pid": 327,
            "code": 2786
          },
          {
            "name": "广汉市",
            "pid": 327,
            "code": 2787
          },
          {
            "name": "什邡市",
            "pid": 327,
            "code": 2788
          },
          {
            "name": "绵竹市",
            "pid": 327,
            "code": 2789
          },
          {
            "name": "罗江县",
            "pid": 327,
            "code": 2790
          },
          {
            "name": "中江县",
            "pid": 327,
            "code": 2791
          }
        ]
      },
      {
        "name": "甘孜",
        "pid": 26,
        "code": 328,
        "sub": [
          {
            "name": "康定县",
            "pid": 328,
            "code": 2792
          },
          {
            "name": "丹巴县",
            "pid": 328,
            "code": 2793
          },
          {
            "name": "泸定县",
            "pid": 328,
            "code": 2794
          },
          {
            "name": "炉霍县",
            "pid": 328,
            "code": 2795
          },
          {
            "name": "九龙县",
            "pid": 328,
            "code": 2796
          },
          {
            "name": "甘孜县",
            "pid": 328,
            "code": 2797
          },
          {
            "name": "雅江县",
            "pid": 328,
            "code": 2798
          },
          {
            "name": "新龙县",
            "pid": 328,
            "code": 2799
          },
          {
            "name": "道孚县",
            "pid": 328,
            "code": 2800
          },
          {
            "name": "白玉县",
            "pid": 328,
            "code": 2801
          },
          {
            "name": "理塘县",
            "pid": 328,
            "code": 2802
          },
          {
            "name": "德格县",
            "pid": 328,
            "code": 2803
          },
          {
            "name": "乡城县",
            "pid": 328,
            "code": 2804
          },
          {
            "name": "石渠县",
            "pid": 328,
            "code": 2805
          },
          {
            "name": "稻城县",
            "pid": 328,
            "code": 2806
          },
          {
            "name": "色达县",
            "pid": 328,
            "code": 2807
          },
          {
            "name": "巴塘县",
            "pid": 328,
            "code": 2808
          },
          {
            "name": "得荣县",
            "pid": 328,
            "code": 2809
          }
        ]
      },
      {
        "name": "广安",
        "pid": 26,
        "code": 329,
        "sub": [
          {
            "name": "广安区",
            "pid": 329,
            "code": 2810
          },
          {
            "name": "华蓥市",
            "pid": 329,
            "code": 2811
          },
          {
            "name": "岳池县",
            "pid": 329,
            "code": 2812
          },
          {
            "name": "武胜县",
            "pid": 329,
            "code": 2813
          },
          {
            "name": "邻水县",
            "pid": 329,
            "code": 2814
          }
        ]
      },
      {
        "name": "广元",
        "pid": 26,
        "code": 330,
        "sub": [
          {
            "name": "利州区",
            "pid": 330,
            "code": 2815
          },
          {
            "name": "元坝区",
            "pid": 330,
            "code": 2816
          },
          {
            "name": "朝天区",
            "pid": 330,
            "code": 2817
          },
          {
            "name": "旺苍县",
            "pid": 330,
            "code": 2818
          },
          {
            "name": "青川县",
            "pid": 330,
            "code": 2819
          },
          {
            "name": "剑阁县",
            "pid": 330,
            "code": 2820
          },
          {
            "name": "苍溪县",
            "pid": 330,
            "code": 2821
          }
        ]
      },
      {
        "name": "乐山",
        "pid": 26,
        "code": 331,
        "sub": [
          {
            "name": "峨眉山市",
            "pid": 331,
            "code": 2822
          },
          {
            "name": "乐山市",
            "pid": 331,
            "code": 2823
          },
          {
            "name": "犍为县",
            "pid": 331,
            "code": 2824
          },
          {
            "name": "井研县",
            "pid": 331,
            "code": 2825
          },
          {
            "name": "夹江县",
            "pid": 331,
            "code": 2826
          },
          {
            "name": "沐川县",
            "pid": 331,
            "code": 2827
          },
          {
            "name": "峨边",
            "pid": 331,
            "code": 2828
          },
          {
            "name": "马边",
            "pid": 331,
            "code": 2829
          }
        ]
      },
      {
        "name": "凉山",
        "pid": 26,
        "code": 332,
        "sub": [
          {
            "name": "西昌市",
            "pid": 332,
            "code": 2830
          },
          {
            "name": "盐源县",
            "pid": 332,
            "code": 2831
          },
          {
            "name": "德昌县",
            "pid": 332,
            "code": 2832
          },
          {
            "name": "会理县",
            "pid": 332,
            "code": 2833
          },
          {
            "name": "会东县",
            "pid": 332,
            "code": 2834
          },
          {
            "name": "宁南县",
            "pid": 332,
            "code": 2835
          },
          {
            "name": "普格县",
            "pid": 332,
            "code": 2836
          },
          {
            "name": "布拖县",
            "pid": 332,
            "code": 2837
          },
          {
            "name": "金阳县",
            "pid": 332,
            "code": 2838
          },
          {
            "name": "昭觉县",
            "pid": 332,
            "code": 2839
          },
          {
            "name": "喜德县",
            "pid": 332,
            "code": 2840
          },
          {
            "name": "冕宁县",
            "pid": 332,
            "code": 2841
          },
          {
            "name": "越西县",
            "pid": 332,
            "code": 2842
          },
          {
            "name": "甘洛县",
            "pid": 332,
            "code": 2843
          },
          {
            "name": "美姑县",
            "pid": 332,
            "code": 2844
          },
          {
            "name": "雷波县",
            "pid": 332,
            "code": 2845
          },
          {
            "name": "木里",
            "pid": 332,
            "code": 2846
          }
        ]
      },
      {
        "name": "眉山",
        "pid": 26,
        "code": 333,
        "sub": [
          {
            "name": "东坡区",
            "pid": 333,
            "code": 2847
          },
          {
            "name": "仁寿县",
            "pid": 333,
            "code": 2848
          },
          {
            "name": "彭山县",
            "pid": 333,
            "code": 2849
          },
          {
            "name": "洪雅县",
            "pid": 333,
            "code": 2850
          },
          {
            "name": "丹棱县",
            "pid": 333,
            "code": 2851
          },
          {
            "name": "青神县",
            "pid": 333,
            "code": 2852
          }
        ]
      },
      {
        "name": "南充",
        "pid": 26,
        "code": 334,
        "sub": [
          {
            "name": "阆中市",
            "pid": 334,
            "code": 2853
          },
          {
            "name": "南部县",
            "pid": 334,
            "code": 2854
          },
          {
            "name": "营山县",
            "pid": 334,
            "code": 2855
          },
          {
            "name": "蓬安县",
            "pid": 334,
            "code": 2856
          },
          {
            "name": "仪陇县",
            "pid": 334,
            "code": 2857
          },
          {
            "name": "顺庆区",
            "pid": 334,
            "code": 2858
          },
          {
            "name": "高坪区",
            "pid": 334,
            "code": 2859
          },
          {
            "name": "嘉陵区",
            "pid": 334,
            "code": 2860
          },
          {
            "name": "西充县",
            "pid": 334,
            "code": 2861
          }
        ]
      },
      {
        "name": "内江",
        "pid": 26,
        "code": 335,
        "sub": [
          {
            "name": "市中区",
            "pid": 335,
            "code": 2862
          },
          {
            "name": "东兴区",
            "pid": 335,
            "code": 2863
          },
          {
            "name": "威远县",
            "pid": 335,
            "code": 2864
          },
          {
            "name": "资中县",
            "pid": 335,
            "code": 2865
          },
          {
            "name": "隆昌县",
            "pid": 335,
            "code": 2866
          }
        ]
      },
      {
        "name": "攀枝花",
        "pid": 26,
        "code": 336,
        "sub": [
          {
            "name": "东  区",
            "pid": 336,
            "code": 2867
          },
          {
            "name": "西  区",
            "pid": 336,
            "code": 2868
          },
          {
            "name": "仁和区",
            "pid": 336,
            "code": 2869
          },
          {
            "name": "米易县",
            "pid": 336,
            "code": 2870
          },
          {
            "name": "盐边县",
            "pid": 336,
            "code": 2871
          }
        ]
      },
      {
        "name": "遂宁",
        "pid": 26,
        "code": 337,
        "sub": [
          {
            "name": "船山区",
            "pid": 337,
            "code": 2872
          },
          {
            "name": "安居区",
            "pid": 337,
            "code": 2873
          },
          {
            "name": "蓬溪县",
            "pid": 337,
            "code": 2874
          },
          {
            "name": "射洪县",
            "pid": 337,
            "code": 2875
          },
          {
            "name": "大英县",
            "pid": 337,
            "code": 2876
          }
        ]
      },
      {
        "name": "雅安",
        "pid": 26,
        "code": 338,
        "sub": [
          {
            "name": "雨城区",
            "pid": 338,
            "code": 2877
          },
          {
            "name": "名山县",
            "pid": 338,
            "code": 2878
          },
          {
            "name": "荥经县",
            "pid": 338,
            "code": 2879
          },
          {
            "name": "汉源县",
            "pid": 338,
            "code": 2880
          },
          {
            "name": "石棉县",
            "pid": 338,
            "code": 2881
          },
          {
            "name": "天全县",
            "pid": 338,
            "code": 2882
          },
          {
            "name": "芦山县",
            "pid": 338,
            "code": 2883
          },
          {
            "name": "宝兴县",
            "pid": 338,
            "code": 2884
          }
        ]
      },
      {
        "name": "宜宾",
        "pid": 26,
        "code": 339,
        "sub": [
          {
            "name": "翠屏区",
            "pid": 339,
            "code": 2885
          },
          {
            "name": "宜宾县",
            "pid": 339,
            "code": 2886
          },
          {
            "name": "南溪县",
            "pid": 339,
            "code": 2887
          },
          {
            "name": "江安县",
            "pid": 339,
            "code": 2888
          },
          {
            "name": "长宁县",
            "pid": 339,
            "code": 2889
          },
          {
            "name": "高县",
            "pid": 339,
            "code": 2890
          },
          {
            "name": "珙县",
            "pid": 339,
            "code": 2891
          },
          {
            "name": "筠连县",
            "pid": 339,
            "code": 2892
          },
          {
            "name": "兴文县",
            "pid": 339,
            "code": 2893
          },
          {
            "name": "屏山县",
            "pid": 339,
            "code": 2894
          }
        ]
      },
      {
        "name": "资阳",
        "pid": 26,
        "code": 340,
        "sub": [
          {
            "name": "雁江区",
            "pid": 340,
            "code": 2895
          },
          {
            "name": "简阳市",
            "pid": 340,
            "code": 2896
          },
          {
            "name": "安岳县",
            "pid": 340,
            "code": 2897
          },
          {
            "name": "乐至县",
            "pid": 340,
            "code": 2898
          }
        ]
      },
      {
        "name": "自贡",
        "pid": 26,
        "code": 341,
        "sub": [
          {
            "name": "大安区",
            "pid": 341,
            "code": 2899
          },
          {
            "name": "自流井区",
            "pid": 341,
            "code": 2900
          },
          {
            "name": "贡井区",
            "pid": 341,
            "code": 2901
          },
          {
            "name": "沿滩区",
            "pid": 341,
            "code": 2902
          },
          {
            "name": "荣县",
            "pid": 341,
            "code": 2903
          },
          {
            "name": "富顺县",
            "pid": 341,
            "code": 2904
          }
        ]
      },
      {
        "name": "泸州",
        "pid": 26,
        "code": 342,
        "sub": [
          {
            "name": "江阳区",
            "pid": 342,
            "code": 2905
          },
          {
            "name": "纳溪区",
            "pid": 342,
            "code": 2906
          },
          {
            "name": "龙马潭区",
            "pid": 342,
            "code": 2907
          },
          {
            "name": "泸县",
            "pid": 342,
            "code": 2908
          },
          {
            "name": "合江县",
            "pid": 342,
            "code": 2909
          },
          {
            "name": "叙永县",
            "pid": 342,
            "code": 2910
          },
          {
            "name": "古蔺县",
            "pid": 342,
            "code": 2911
          }
        ]
      }
    ]
  },
  {
    "name": "天津",
    "code": 27,
    "sub": [
      {
        "name": "天津",
        "pid": 27,
        "code": 343,
        "sub": [
          {
            "name": "和平区",
            "pid": 343,
            "code": 2912
          },
          {
            "name": "河西区",
            "pid": 343,
            "code": 2913
          },
          {
            "name": "南开区",
            "pid": 343,
            "code": 2914
          },
          {
            "name": "河北区",
            "pid": 343,
            "code": 2915
          },
          {
            "name": "河东区",
            "pid": 343,
            "code": 2916
          },
          {
            "name": "红桥区",
            "pid": 343,
            "code": 2917
          },
          {
            "name": "东丽区",
            "pid": 343,
            "code": 2918
          },
          {
            "name": "津南区",
            "pid": 343,
            "code": 2919
          },
          {
            "name": "西青区",
            "pid": 343,
            "code": 2920
          },
          {
            "name": "北辰区",
            "pid": 343,
            "code": 2921
          },
          {
            "name": "塘沽区",
            "pid": 343,
            "code": 2922
          },
          {
            "name": "汉沽区",
            "pid": 343,
            "code": 2923
          },
          {
            "name": "大港区",
            "pid": 343,
            "code": 2924
          },
          {
            "name": "武清区",
            "pid": 343,
            "code": 2925
          },
          {
            "name": "宝坻区",
            "pid": 343,
            "code": 2926
          },
          {
            "name": "经济开发区",
            "pid": 343,
            "code": 2927
          },
          {
            "name": "宁河县",
            "pid": 343,
            "code": 2928
          },
          {
            "name": "静海县",
            "pid": 343,
            "code": 2929
          },
          {
            "name": "蓟县",
            "pid": 343,
            "code": 2930
          }
        ]
      }
    ]
  },
  {
    "name": "西藏",
    "code": 28,
    "sub": [
      {
        "name": "拉萨",
        "pid": 28,
        "code": 344,
        "sub": [
          {
            "name": "城关区",
            "pid": 344,
            "code": 2931
          },
          {
            "name": "林周县",
            "pid": 344,
            "code": 2932
          },
          {
            "name": "当雄县",
            "pid": 344,
            "code": 2933
          },
          {
            "name": "尼木县",
            "pid": 344,
            "code": 2934
          },
          {
            "name": "曲水县",
            "pid": 344,
            "code": 2935
          },
          {
            "name": "堆龙德庆县",
            "pid": 344,
            "code": 2936
          },
          {
            "name": "达孜县",
            "pid": 344,
            "code": 2937
          },
          {
            "name": "墨竹工卡县",
            "pid": 344,
            "code": 2938
          }
        ]
      },
      {
        "name": "阿里",
        "pid": 28,
        "code": 345,
        "sub": [
          {
            "name": "噶尔县",
            "pid": 345,
            "code": 2939
          },
          {
            "name": "普兰县",
            "pid": 345,
            "code": 2940
          },
          {
            "name": "札达县",
            "pid": 345,
            "code": 2941
          },
          {
            "name": "日土县",
            "pid": 345,
            "code": 2942
          },
          {
            "name": "革吉县",
            "pid": 345,
            "code": 2943
          },
          {
            "name": "改则县",
            "pid": 345,
            "code": 2944
          },
          {
            "name": "措勤县",
            "pid": 345,
            "code": 2945
          }
        ]
      },
      {
        "name": "昌都",
        "pid": 28,
        "code": 346,
        "sub": [
          {
            "name": "昌都县",
            "pid": 346,
            "code": 2946
          },
          {
            "name": "江达县",
            "pid": 346,
            "code": 2947
          },
          {
            "name": "贡觉县",
            "pid": 346,
            "code": 2948
          },
          {
            "name": "类乌齐县",
            "pid": 346,
            "code": 2949
          },
          {
            "name": "丁青县",
            "pid": 346,
            "code": 2950
          },
          {
            "name": "察雅县",
            "pid": 346,
            "code": 2951
          },
          {
            "name": "八宿县",
            "pid": 346,
            "code": 2952
          },
          {
            "name": "左贡县",
            "pid": 346,
            "code": 2953
          },
          {
            "name": "芒康县",
            "pid": 346,
            "code": 2954
          },
          {
            "name": "洛隆县",
            "pid": 346,
            "code": 2955
          },
          {
            "name": "边坝县",
            "pid": 346,
            "code": 2956
          }
        ]
      },
      {
        "name": "林芝",
        "pid": 28,
        "code": 347,
        "sub": [
          {
            "name": "林芝县",
            "pid": 347,
            "code": 2957
          },
          {
            "name": "工布江达县",
            "pid": 347,
            "code": 2958
          },
          {
            "name": "米林县",
            "pid": 347,
            "code": 2959
          },
          {
            "name": "墨脱县",
            "pid": 347,
            "code": 2960
          },
          {
            "name": "波密县",
            "pid": 347,
            "code": 2961
          },
          {
            "name": "察隅县",
            "pid": 347,
            "code": 2962
          },
          {
            "name": "朗县",
            "pid": 347,
            "code": 2963
          }
        ]
      },
      {
        "name": "那曲",
        "pid": 28,
        "code": 348,
        "sub": [
          {
            "name": "那曲县",
            "pid": 348,
            "code": 2964
          },
          {
            "name": "嘉黎县",
            "pid": 348,
            "code": 2965
          },
          {
            "name": "比如县",
            "pid": 348,
            "code": 2966
          },
          {
            "name": "聂荣县",
            "pid": 348,
            "code": 2967
          },
          {
            "name": "安多县",
            "pid": 348,
            "code": 2968
          },
          {
            "name": "申扎县",
            "pid": 348,
            "code": 2969
          },
          {
            "name": "索县",
            "pid": 348,
            "code": 2970
          },
          {
            "name": "班戈县",
            "pid": 348,
            "code": 2971
          },
          {
            "name": "巴青县",
            "pid": 348,
            "code": 2972
          },
          {
            "name": "尼玛县",
            "pid": 348,
            "code": 2973
          }
        ]
      },
      {
        "name": "日喀则",
        "pid": 28,
        "code": 349,
        "sub": [
          {
            "name": "日喀则市",
            "pid": 349,
            "code": 2974
          },
          {
            "name": "南木林县",
            "pid": 349,
            "code": 2975
          },
          {
            "name": "江孜县",
            "pid": 349,
            "code": 2976
          },
          {
            "name": "定日县",
            "pid": 349,
            "code": 2977
          },
          {
            "name": "萨迦县",
            "pid": 349,
            "code": 2978
          },
          {
            "name": "拉孜县",
            "pid": 349,
            "code": 2979
          },
          {
            "name": "昂仁县",
            "pid": 349,
            "code": 2980
          },
          {
            "name": "谢通门县",
            "pid": 349,
            "code": 2981
          },
          {
            "name": "白朗县",
            "pid": 349,
            "code": 2982
          },
          {
            "name": "仁布县",
            "pid": 349,
            "code": 2983
          },
          {
            "name": "康马县",
            "pid": 349,
            "code": 2984
          },
          {
            "name": "定结县",
            "pid": 349,
            "code": 2985
          },
          {
            "name": "仲巴县",
            "pid": 349,
            "code": 2986
          },
          {
            "name": "亚东县",
            "pid": 349,
            "code": 2987
          },
          {
            "name": "吉隆县",
            "pid": 349,
            "code": 2988
          },
          {
            "name": "聂拉木县",
            "pid": 349,
            "code": 2989
          },
          {
            "name": "萨嘎县",
            "pid": 349,
            "code": 2990
          },
          {
            "name": "岗巴县",
            "pid": 349,
            "code": 2991
          }
        ]
      },
      {
        "name": "山南",
        "pid": 28,
        "code": 350,
        "sub": [
          {
            "name": "乃东县",
            "pid": 350,
            "code": 2992
          },
          {
            "name": "扎囊县",
            "pid": 350,
            "code": 2993
          },
          {
            "name": "贡嘎县",
            "pid": 350,
            "code": 2994
          },
          {
            "name": "桑日县",
            "pid": 350,
            "code": 2995
          },
          {
            "name": "琼结县",
            "pid": 350,
            "code": 2996
          },
          {
            "name": "曲松县",
            "pid": 350,
            "code": 2997
          },
          {
            "name": "措美县",
            "pid": 350,
            "code": 2998
          },
          {
            "name": "洛扎县",
            "pid": 350,
            "code": 2999
          },
          {
            "name": "加查县",
            "pid": 350,
            "code": 3000
          },
          {
            "name": "隆子县",
            "pid": 350,
            "code": 3001
          },
          {
            "name": "错那县",
            "pid": 350,
            "code": 3002
          },
          {
            "name": "浪卡子县",
            "pid": 350,
            "code": 3003
          }
        ]
      }
    ]
  },
  {
    "name": "新疆",
    "code": 29,
    "sub": [
      {
        "name": "乌鲁木齐",
        "pid": 29,
        "code": 351,
        "sub": [
          {
            "name": "天山区",
            "pid": 351,
            "code": 3004
          },
          {
            "name": "沙依巴克区",
            "pid": 351,
            "code": 3005
          },
          {
            "name": "新市区",
            "pid": 351,
            "code": 3006
          },
          {
            "name": "水磨沟区",
            "pid": 351,
            "code": 3007
          },
          {
            "name": "头屯河区",
            "pid": 351,
            "code": 3008
          },
          {
            "name": "达坂城区",
            "pid": 351,
            "code": 3009
          },
          {
            "name": "米东区",
            "pid": 351,
            "code": 3010
          },
          {
            "name": "乌鲁木齐县",
            "pid": 351,
            "code": 3011
          }
        ]
      },
      {
        "name": "阿克苏",
        "pid": 29,
        "code": 352,
        "sub": [
          {
            "name": "阿克苏市",
            "pid": 352,
            "code": 3012
          },
          {
            "name": "温宿县",
            "pid": 352,
            "code": 3013
          },
          {
            "name": "库车县",
            "pid": 352,
            "code": 3014
          },
          {
            "name": "沙雅县",
            "pid": 352,
            "code": 3015
          },
          {
            "name": "新和县",
            "pid": 352,
            "code": 3016
          },
          {
            "name": "拜城县",
            "pid": 352,
            "code": 3017
          },
          {
            "name": "乌什县",
            "pid": 352,
            "code": 3018
          },
          {
            "name": "阿瓦提县",
            "pid": 352,
            "code": 3019
          },
          {
            "name": "柯坪县",
            "pid": 352,
            "code": 3020
          }
        ]
      },
      {
        "name": "阿拉尔",
        "pid": 29,
        "code": 353,
        "sub": [
          {
            "name": "阿拉尔市",
            "pid": 353,
            "code": 3021
          }
        ]
      },
      {
        "name": "巴音郭楞",
        "pid": 29,
        "code": 354,
        "sub": [
          {
            "name": "库尔勒市",
            "pid": 354,
            "code": 3022
          },
          {
            "name": "轮台县",
            "pid": 354,
            "code": 3023
          },
          {
            "name": "尉犁县",
            "pid": 354,
            "code": 3024
          },
          {
            "name": "若羌县",
            "pid": 354,
            "code": 3025
          },
          {
            "name": "且末县",
            "pid": 354,
            "code": 3026
          },
          {
            "name": "焉耆",
            "pid": 354,
            "code": 3027
          },
          {
            "name": "和静县",
            "pid": 354,
            "code": 3028
          },
          {
            "name": "和硕县",
            "pid": 354,
            "code": 3029
          },
          {
            "name": "博湖县",
            "pid": 354,
            "code": 3030
          }
        ]
      },
      {
        "name": "博尔塔拉",
        "pid": 29,
        "code": 355,
        "sub": [
          {
            "name": "博乐市",
            "pid": 355,
            "code": 3031
          },
          {
            "name": "精河县",
            "pid": 355,
            "code": 3032
          },
          {
            "name": "温泉县",
            "pid": 355,
            "code": 3033
          }
        ]
      },
      {
        "name": "昌吉",
        "pid": 29,
        "code": 356,
        "sub": [
          {
            "name": "呼图壁县",
            "pid": 356,
            "code": 3034
          },
          {
            "name": "米泉市",
            "pid": 356,
            "code": 3035
          },
          {
            "name": "昌吉市",
            "pid": 356,
            "code": 3036
          },
          {
            "name": "阜康市",
            "pid": 356,
            "code": 3037
          },
          {
            "name": "玛纳斯县",
            "pid": 356,
            "code": 3038
          },
          {
            "name": "奇台县",
            "pid": 356,
            "code": 3039
          },
          {
            "name": "吉木萨尔县",
            "pid": 356,
            "code": 3040
          },
          {
            "name": "木垒",
            "pid": 356,
            "code": 3041
          }
        ]
      },
      {
        "name": "哈密",
        "pid": 29,
        "code": 357,
        "sub": [
          {
            "name": "哈密市",
            "pid": 357,
            "code": 3042
          },
          {
            "name": "伊吾县",
            "pid": 357,
            "code": 3043
          },
          {
            "name": "巴里坤",
            "pid": 357,
            "code": 3044
          }
        ]
      },
      {
        "name": "和田",
        "pid": 29,
        "code": 358,
        "sub": [
          {
            "name": "和田市",
            "pid": 358,
            "code": 3045
          },
          {
            "name": "和田县",
            "pid": 358,
            "code": 3046
          },
          {
            "name": "墨玉县",
            "pid": 358,
            "code": 3047
          },
          {
            "name": "皮山县",
            "pid": 358,
            "code": 3048
          },
          {
            "name": "洛浦县",
            "pid": 358,
            "code": 3049
          },
          {
            "name": "策勒县",
            "pid": 358,
            "code": 3050
          },
          {
            "name": "于田县",
            "pid": 358,
            "code": 3051
          },
          {
            "name": "民丰县",
            "pid": 358,
            "code": 3052
          }
        ]
      },
      {
        "name": "喀什",
        "pid": 29,
        "code": 359,
        "sub": [
          {
            "name": "喀什市",
            "pid": 359,
            "code": 3053
          },
          {
            "name": "疏附县",
            "pid": 359,
            "code": 3054
          },
          {
            "name": "疏勒县",
            "pid": 359,
            "code": 3055
          },
          {
            "name": "英吉沙县",
            "pid": 359,
            "code": 3056
          },
          {
            "name": "泽普县",
            "pid": 359,
            "code": 3057
          },
          {
            "name": "莎车县",
            "pid": 359,
            "code": 3058
          },
          {
            "name": "叶城县",
            "pid": 359,
            "code": 3059
          },
          {
            "name": "麦盖提县",
            "pid": 359,
            "code": 3060
          },
          {
            "name": "岳普湖县",
            "pid": 359,
            "code": 3061
          },
          {
            "name": "伽师县",
            "pid": 359,
            "code": 3062
          },
          {
            "name": "巴楚县",
            "pid": 359,
            "code": 3063
          },
          {
            "name": "塔什库尔干",
            "pid": 359,
            "code": 3064
          }
        ]
      },
      {
        "name": "克拉玛依",
        "pid": 29,
        "code": 360,
        "sub": [
          {
            "name": "克拉玛依市",
            "pid": 360,
            "code": 3065
          }
        ]
      },
      {
        "name": "克孜勒苏",
        "pid": 29,
        "code": 361,
        "sub": [
          {
            "name": "阿图什市",
            "pid": 361,
            "code": 3066
          },
          {
            "name": "阿克陶县",
            "pid": 361,
            "code": 3067
          },
          {
            "name": "阿合奇县",
            "pid": 361,
            "code": 3068
          },
          {
            "name": "乌恰县",
            "pid": 361,
            "code": 3069
          }
        ]
      },
      {
        "name": "石河子",
        "pid": 29,
        "code": 362,
        "sub": [
          {
            "name": "石河子市",
            "pid": 362,
            "code": 3070
          }
        ]
      },
      {
        "name": "图木舒克",
        "pid": 29,
        "code": 363,
        "sub": [
          {
            "name": "图木舒克市",
            "pid": 363,
            "code": 3071
          }
        ]
      },
      {
        "name": "吐鲁番",
        "pid": 29,
        "code": 364,
        "sub": [
          {
            "name": "吐鲁番市",
            "pid": 364,
            "code": 3072
          },
          {
            "name": "鄯善县",
            "pid": 364,
            "code": 3073
          },
          {
            "name": "托克逊县",
            "pid": 364,
            "code": 3074
          }
        ]
      },
      {
        "name": "五家渠",
        "pid": 29,
        "code": 365,
        "sub": [
          {
            "name": "五家渠市",
            "pid": 365,
            "code": 3075
          }
        ]
      },
      {
        "name": "伊犁",
        "pid": 29,
        "code": 366,
        "sub": [
          {
            "name": "阿勒泰市",
            "pid": 366,
            "code": 3076
          },
          {
            "name": "布克赛尔",
            "pid": 366,
            "code": 3077
          },
          {
            "name": "伊宁市",
            "pid": 366,
            "code": 3078
          },
          {
            "name": "布尔津县",
            "pid": 366,
            "code": 3079
          },
          {
            "name": "奎屯市",
            "pid": 366,
            "code": 3080
          },
          {
            "name": "乌苏市",
            "pid": 366,
            "code": 3081
          },
          {
            "name": "额敏县",
            "pid": 366,
            "code": 3082
          },
          {
            "name": "富蕴县",
            "pid": 366,
            "code": 3083
          },
          {
            "name": "伊宁县",
            "pid": 366,
            "code": 3084
          },
          {
            "name": "福海县",
            "pid": 366,
            "code": 3085
          },
          {
            "name": "霍城县",
            "pid": 366,
            "code": 3086
          },
          {
            "name": "沙湾县",
            "pid": 366,
            "code": 3087
          },
          {
            "name": "巩留县",
            "pid": 366,
            "code": 3088
          },
          {
            "name": "哈巴河县",
            "pid": 366,
            "code": 3089
          },
          {
            "name": "托里县",
            "pid": 366,
            "code": 3090
          },
          {
            "name": "青河县",
            "pid": 366,
            "code": 3091
          },
          {
            "name": "新源县",
            "pid": 366,
            "code": 3092
          },
          {
            "name": "裕民县",
            "pid": 366,
            "code": 3093
          },
          {
            "name": "和布克赛尔",
            "pid": 366,
            "code": 3094
          },
          {
            "name": "吉木乃县",
            "pid": 366,
            "code": 3095
          },
          {
            "name": "昭苏县",
            "pid": 366,
            "code": 3096
          },
          {
            "name": "特克斯县",
            "pid": 366,
            "code": 3097
          },
          {
            "name": "尼勒克县",
            "pid": 366,
            "code": 3098
          },
          {
            "name": "察布查尔",
            "pid": 366,
            "code": 3099
          }
        ]
      }
    ]
  },
  {
    "name": "云南",
    "code": 30,
    "sub": [
      {
        "name": "昆明",
        "pid": 30,
        "code": 367,
        "sub": [
          {
            "name": "盘龙区",
            "pid": 367,
            "code": 3100
          },
          {
            "name": "五华区",
            "pid": 367,
            "code": 3101
          },
          {
            "name": "官渡区",
            "pid": 367,
            "code": 3102
          },
          {
            "name": "西山区",
            "pid": 367,
            "code": 3103
          },
          {
            "name": "东川区",
            "pid": 367,
            "code": 3104
          },
          {
            "name": "安宁市",
            "pid": 367,
            "code": 3105
          },
          {
            "name": "呈贡县",
            "pid": 367,
            "code": 3106
          },
          {
            "name": "晋宁县",
            "pid": 367,
            "code": 3107
          },
          {
            "name": "富民县",
            "pid": 367,
            "code": 3108
          },
          {
            "name": "宜良县",
            "pid": 367,
            "code": 3109
          },
          {
            "name": "嵩明县",
            "pid": 367,
            "code": 3110
          },
          {
            "name": "石林县",
            "pid": 367,
            "code": 3111
          },
          {
            "name": "禄劝",
            "pid": 367,
            "code": 3112
          },
          {
            "name": "寻甸",
            "pid": 367,
            "code": 3113
          }
        ]
      },
      {
        "name": "怒江",
        "pid": 30,
        "code": 368,
        "sub": [
          {
            "name": "兰坪",
            "pid": 368,
            "code": 3114
          },
          {
            "name": "泸水县",
            "pid": 368,
            "code": 3115
          },
          {
            "name": "福贡县",
            "pid": 368,
            "code": 3116
          },
          {
            "name": "贡山",
            "pid": 368,
            "code": 3117
          }
        ]
      },
      {
        "name": "普洱",
        "pid": 30,
        "code": 369,
        "sub": [
          {
            "name": "宁洱",
            "pid": 369,
            "code": 3118
          },
          {
            "name": "思茅区",
            "pid": 369,
            "code": 3119
          },
          {
            "name": "墨江",
            "pid": 369,
            "code": 3120
          },
          {
            "name": "景东",
            "pid": 369,
            "code": 3121
          },
          {
            "name": "景谷",
            "pid": 369,
            "code": 3122
          },
          {
            "name": "镇沅",
            "pid": 369,
            "code": 3123
          },
          {
            "name": "江城",
            "pid": 369,
            "code": 3124
          },
          {
            "name": "孟连",
            "pid": 369,
            "code": 3125
          },
          {
            "name": "澜沧",
            "pid": 369,
            "code": 3126
          },
          {
            "name": "西盟",
            "pid": 369,
            "code": 3127
          }
        ]
      },
      {
        "name": "丽江",
        "pid": 30,
        "code": 370,
        "sub": [
          {
            "name": "古城区",
            "pid": 370,
            "code": 3128
          },
          {
            "name": "宁蒗",
            "pid": 370,
            "code": 3129
          },
          {
            "name": "玉龙",
            "pid": 370,
            "code": 3130
          },
          {
            "name": "永胜县",
            "pid": 370,
            "code": 3131
          },
          {
            "name": "华坪县",
            "pid": 370,
            "code": 3132
          }
        ]
      },
      {
        "name": "保山",
        "pid": 30,
        "code": 371,
        "sub": [
          {
            "name": "隆阳区",
            "pid": 371,
            "code": 3133
          },
          {
            "name": "施甸县",
            "pid": 371,
            "code": 3134
          },
          {
            "name": "腾冲县",
            "pid": 371,
            "code": 3135
          },
          {
            "name": "龙陵县",
            "pid": 371,
            "code": 3136
          },
          {
            "name": "昌宁县",
            "pid": 371,
            "code": 3137
          }
        ]
      },
      {
        "name": "楚雄",
        "pid": 30,
        "code": 372,
        "sub": [
          {
            "name": "楚雄市",
            "pid": 372,
            "code": 3138
          },
          {
            "name": "双柏县",
            "pid": 372,
            "code": 3139
          },
          {
            "name": "牟定县",
            "pid": 372,
            "code": 3140
          },
          {
            "name": "南华县",
            "pid": 372,
            "code": 3141
          },
          {
            "name": "姚安县",
            "pid": 372,
            "code": 3142
          },
          {
            "name": "大姚县",
            "pid": 372,
            "code": 3143
          },
          {
            "name": "永仁县",
            "pid": 372,
            "code": 3144
          },
          {
            "name": "元谋县",
            "pid": 372,
            "code": 3145
          },
          {
            "name": "武定县",
            "pid": 372,
            "code": 3146
          },
          {
            "name": "禄丰县",
            "pid": 372,
            "code": 3147
          }
        ]
      },
      {
        "name": "大理",
        "pid": 30,
        "code": 373,
        "sub": [
          {
            "name": "大理市",
            "pid": 373,
            "code": 3148
          },
          {
            "name": "祥云县",
            "pid": 373,
            "code": 3149
          },
          {
            "name": "宾川县",
            "pid": 373,
            "code": 3150
          },
          {
            "name": "弥渡县",
            "pid": 373,
            "code": 3151
          },
          {
            "name": "永平县",
            "pid": 373,
            "code": 3152
          },
          {
            "name": "云龙县",
            "pid": 373,
            "code": 3153
          },
          {
            "name": "洱源县",
            "pid": 373,
            "code": 3154
          },
          {
            "name": "剑川县",
            "pid": 373,
            "code": 3155
          },
          {
            "name": "鹤庆县",
            "pid": 373,
            "code": 3156
          },
          {
            "name": "漾濞",
            "pid": 373,
            "code": 3157
          },
          {
            "name": "南涧",
            "pid": 373,
            "code": 3158
          },
          {
            "name": "巍山",
            "pid": 373,
            "code": 3159
          }
        ]
      },
      {
        "name": "德宏",
        "pid": 30,
        "code": 374,
        "sub": [
          {
            "name": "潞西市",
            "pid": 374,
            "code": 3160
          },
          {
            "name": "瑞丽市",
            "pid": 374,
            "code": 3161
          },
          {
            "name": "梁河县",
            "pid": 374,
            "code": 3162
          },
          {
            "name": "盈江县",
            "pid": 374,
            "code": 3163
          },
          {
            "name": "陇川县",
            "pid": 374,
            "code": 3164
          }
        ]
      },
      {
        "name": "迪庆",
        "pid": 30,
        "code": 375,
        "sub": [
          {
            "name": "香格里拉县",
            "pid": 375,
            "code": 3165
          },
          {
            "name": "德钦县",
            "pid": 375,
            "code": 3166
          },
          {
            "name": "维西",
            "pid": 375,
            "code": 3167
          }
        ]
      },
      {
        "name": "红河",
        "pid": 30,
        "code": 376,
        "sub": [
          {
            "name": "泸西县",
            "pid": 376,
            "code": 3168
          },
          {
            "name": "蒙自县",
            "pid": 376,
            "code": 3169
          },
          {
            "name": "个旧市",
            "pid": 376,
            "code": 3170
          },
          {
            "name": "开远市",
            "pid": 376,
            "code": 3171
          },
          {
            "name": "绿春县",
            "pid": 376,
            "code": 3172
          },
          {
            "name": "建水县",
            "pid": 376,
            "code": 3173
          },
          {
            "name": "石屏县",
            "pid": 376,
            "code": 3174
          },
          {
            "name": "弥勒县",
            "pid": 376,
            "code": 3175
          },
          {
            "name": "元阳县",
            "pid": 376,
            "code": 3176
          },
          {
            "name": "红河县",
            "pid": 376,
            "code": 3177
          },
          {
            "name": "金平",
            "pid": 376,
            "code": 3178
          },
          {
            "name": "河口",
            "pid": 376,
            "code": 3179
          },
          {
            "name": "屏边",
            "pid": 376,
            "code": 3180
          }
        ]
      },
      {
        "name": "临沧",
        "pid": 30,
        "code": 377,
        "sub": [
          {
            "name": "临翔区",
            "pid": 377,
            "code": 3181
          },
          {
            "name": "凤庆县",
            "pid": 377,
            "code": 3182
          },
          {
            "name": "云县",
            "pid": 377,
            "code": 3183
          },
          {
            "name": "永德县",
            "pid": 377,
            "code": 3184
          },
          {
            "name": "镇康县",
            "pid": 377,
            "code": 3185
          },
          {
            "name": "双江",
            "pid": 377,
            "code": 3186
          },
          {
            "name": "耿马",
            "pid": 377,
            "code": 3187
          },
          {
            "name": "沧源",
            "pid": 377,
            "code": 3188
          }
        ]
      },
      {
        "name": "曲靖",
        "pid": 30,
        "code": 378,
        "sub": [
          {
            "name": "麒麟区",
            "pid": 378,
            "code": 3189
          },
          {
            "name": "宣威市",
            "pid": 378,
            "code": 3190
          },
          {
            "name": "马龙县",
            "pid": 378,
            "code": 3191
          },
          {
            "name": "陆良县",
            "pid": 378,
            "code": 3192
          },
          {
            "name": "师宗县",
            "pid": 378,
            "code": 3193
          },
          {
            "name": "罗平县",
            "pid": 378,
            "code": 3194
          },
          {
            "name": "富源县",
            "pid": 378,
            "code": 3195
          },
          {
            "name": "会泽县",
            "pid": 378,
            "code": 3196
          },
          {
            "name": "沾益县",
            "pid": 378,
            "code": 3197
          }
        ]
      },
      {
        "name": "文山",
        "pid": 30,
        "code": 379,
        "sub": [
          {
            "name": "文山县",
            "pid": 379,
            "code": 3198
          },
          {
            "name": "砚山县",
            "pid": 379,
            "code": 3199
          },
          {
            "name": "西畴县",
            "pid": 379,
            "code": 3200
          },
          {
            "name": "麻栗坡县",
            "pid": 379,
            "code": 3201
          },
          {
            "name": "马关县",
            "pid": 379,
            "code": 3202
          },
          {
            "name": "丘北县",
            "pid": 379,
            "code": 3203
          },
          {
            "name": "广南县",
            "pid": 379,
            "code": 3204
          },
          {
            "name": "富宁县",
            "pid": 379,
            "code": 3205
          }
        ]
      },
      {
        "name": "西双版纳",
        "pid": 30,
        "code": 380,
        "sub": [
          {
            "name": "景洪市",
            "pid": 380,
            "code": 3206
          },
          {
            "name": "勐海县",
            "pid": 380,
            "code": 3207
          },
          {
            "name": "勐腊县",
            "pid": 380,
            "code": 3208
          }
        ]
      },
      {
        "name": "玉溪",
        "pid": 30,
        "code": 381,
        "sub": [
          {
            "name": "红塔区",
            "pid": 381,
            "code": 3209
          },
          {
            "name": "江川县",
            "pid": 381,
            "code": 3210
          },
          {
            "name": "澄江县",
            "pid": 381,
            "code": 3211
          },
          {
            "name": "通海县",
            "pid": 381,
            "code": 3212
          },
          {
            "name": "华宁县",
            "pid": 381,
            "code": 3213
          },
          {
            "name": "易门县",
            "pid": 381,
            "code": 3214
          },
          {
            "name": "峨山",
            "pid": 381,
            "code": 3215
          },
          {
            "name": "新平",
            "pid": 381,
            "code": 3216
          },
          {
            "name": "元江",
            "pid": 381,
            "code": 3217
          }
        ]
      },
      {
        "name": "昭通",
        "pid": 30,
        "code": 382,
        "sub": [
          {
            "name": "昭阳区",
            "pid": 382,
            "code": 3218
          },
          {
            "name": "鲁甸县",
            "pid": 382,
            "code": 3219
          },
          {
            "name": "巧家县",
            "pid": 382,
            "code": 3220
          },
          {
            "name": "盐津县",
            "pid": 382,
            "code": 3221
          },
          {
            "name": "大关县",
            "pid": 382,
            "code": 3222
          },
          {
            "name": "永善县",
            "pid": 382,
            "code": 3223
          },
          {
            "name": "绥江县",
            "pid": 382,
            "code": 3224
          },
          {
            "name": "镇雄县",
            "pid": 382,
            "code": 3225
          },
          {
            "name": "彝良县",
            "pid": 382,
            "code": 3226
          },
          {
            "name": "威信县",
            "pid": 382,
            "code": 3227
          },
          {
            "name": "水富县",
            "pid": 382,
            "code": 3228
          }
        ]
      }
    ]
  },
  {
    "name": "浙江",
    "code": 31,
    "sub": [
      {
        "name": "杭州",
        "pid": 31,
        "code": 383,
        "sub": [
          {
            "name": "西湖区",
            "pid": 383,
            "code": 3229
          },
          {
            "name": "上城区",
            "pid": 383,
            "code": 3230
          },
          {
            "name": "下城区",
            "pid": 383,
            "code": 3231
          },
          {
            "name": "拱墅区",
            "pid": 383,
            "code": 3232
          },
          {
            "name": "滨江区",
            "pid": 383,
            "code": 3233
          },
          {
            "name": "江干区",
            "pid": 383,
            "code": 3234
          },
          {
            "name": "萧山区",
            "pid": 383,
            "code": 3235
          },
          {
            "name": "余杭区",
            "pid": 383,
            "code": 3236
          },
          {
            "name": "市郊",
            "pid": 383,
            "code": 3237
          },
          {
            "name": "建德市",
            "pid": 383,
            "code": 3238
          },
          {
            "name": "富阳市",
            "pid": 383,
            "code": 3239
          },
          {
            "name": "临安市",
            "pid": 383,
            "code": 3240
          },
          {
            "name": "桐庐县",
            "pid": 383,
            "code": 3241
          },
          {
            "name": "淳安县",
            "pid": 383,
            "code": 3242
          }
        ]
      },
      {
        "name": "湖州",
        "pid": 31,
        "code": 384,
        "sub": [
          {
            "name": "吴兴区",
            "pid": 384,
            "code": 3243
          },
          {
            "name": "南浔区",
            "pid": 384,
            "code": 3244
          },
          {
            "name": "德清县",
            "pid": 384,
            "code": 3245
          },
          {
            "name": "长兴县",
            "pid": 384,
            "code": 3246
          },
          {
            "name": "安吉县",
            "pid": 384,
            "code": 3247
          }
        ]
      },
      {
        "name": "嘉兴",
        "pid": 31,
        "code": 385,
        "sub": [
          {
            "name": "南湖区",
            "pid": 385,
            "code": 3248
          },
          {
            "name": "秀洲区",
            "pid": 385,
            "code": 3249
          },
          {
            "name": "海宁市",
            "pid": 385,
            "code": 3250
          },
          {
            "name": "嘉善县",
            "pid": 385,
            "code": 3251
          },
          {
            "name": "平湖市",
            "pid": 385,
            "code": 3252
          },
          {
            "name": "桐乡市",
            "pid": 385,
            "code": 3253
          },
          {
            "name": "海盐县",
            "pid": 385,
            "code": 3254
          }
        ]
      },
      {
        "name": "金华",
        "pid": 31,
        "code": 386,
        "sub": [
          {
            "name": "婺城区",
            "pid": 386,
            "code": 3255
          },
          {
            "name": "金东区",
            "pid": 386,
            "code": 3256
          },
          {
            "name": "兰溪市",
            "pid": 386,
            "code": 3257
          },
          {
            "name": "市区",
            "pid": 386,
            "code": 3258
          },
          {
            "name": "佛堂镇",
            "pid": 386,
            "code": 3259
          },
          {
            "name": "上溪镇",
            "pid": 386,
            "code": 3260
          },
          {
            "name": "义亭镇",
            "pid": 386,
            "code": 3261
          },
          {
            "name": "大陈镇",
            "pid": 386,
            "code": 3262
          },
          {
            "name": "苏溪镇",
            "pid": 386,
            "code": 3263
          },
          {
            "name": "赤岸镇",
            "pid": 386,
            "code": 3264
          },
          {
            "name": "东阳市",
            "pid": 386,
            "code": 3265
          },
          {
            "name": "永康市",
            "pid": 386,
            "code": 3266
          },
          {
            "name": "武义县",
            "pid": 386,
            "code": 3267
          },
          {
            "name": "浦江县",
            "pid": 386,
            "code": 3268
          },
          {
            "name": "磐安县",
            "pid": 386,
            "code": 3269
          }
        ]
      },
      {
        "name": "丽水",
        "pid": 31,
        "code": 387,
        "sub": [
          {
            "name": "莲都区",
            "pid": 387,
            "code": 3270
          },
          {
            "name": "龙泉市",
            "pid": 387,
            "code": 3271
          },
          {
            "name": "青田县",
            "pid": 387,
            "code": 3272
          },
          {
            "name": "缙云县",
            "pid": 387,
            "code": 3273
          },
          {
            "name": "遂昌县",
            "pid": 387,
            "code": 3274
          },
          {
            "name": "松阳县",
            "pid": 387,
            "code": 3275
          },
          {
            "name": "云和县",
            "pid": 387,
            "code": 3276
          },
          {
            "name": "庆元县",
            "pid": 387,
            "code": 3277
          },
          {
            "name": "景宁",
            "pid": 387,
            "code": 3278
          }
        ]
      },
      {
        "name": "宁波",
        "pid": 31,
        "code": 388,
        "sub": [
          {
            "name": "海曙区",
            "pid": 388,
            "code": 3279
          },
          {
            "name": "江东区",
            "pid": 388,
            "code": 3280
          },
          {
            "name": "江北区",
            "pid": 388,
            "code": 3281
          },
          {
            "name": "镇海区",
            "pid": 388,
            "code": 3282
          },
          {
            "name": "北仑区",
            "pid": 388,
            "code": 3283
          },
          {
            "name": "鄞州区",
            "pid": 388,
            "code": 3284
          },
          {
            "name": "余姚市",
            "pid": 388,
            "code": 3285
          },
          {
            "name": "慈溪市",
            "pid": 388,
            "code": 3286
          },
          {
            "name": "奉化市",
            "pid": 388,
            "code": 3287
          },
          {
            "name": "象山县",
            "pid": 388,
            "code": 3288
          },
          {
            "name": "宁海县",
            "pid": 388,
            "code": 3289
          }
        ]
      },
      {
        "name": "绍兴",
        "pid": 31,
        "code": 389,
        "sub": [
          {
            "name": "越城区",
            "pid": 389,
            "code": 3290
          },
          {
            "name": "上虞市",
            "pid": 389,
            "code": 3291
          },
          {
            "name": "嵊州市",
            "pid": 389,
            "code": 3292
          },
          {
            "name": "绍兴县",
            "pid": 389,
            "code": 3293
          },
          {
            "name": "新昌县",
            "pid": 389,
            "code": 3294
          },
          {
            "name": "诸暨市",
            "pid": 389,
            "code": 3295
          }
        ]
      },
      {
        "name": "台州",
        "pid": 31,
        "code": 390,
        "sub": [
          {
            "name": "椒江区",
            "pid": 390,
            "code": 3296
          },
          {
            "name": "黄岩区",
            "pid": 390,
            "code": 3297
          },
          {
            "name": "路桥区",
            "pid": 390,
            "code": 3298
          },
          {
            "name": "温岭市",
            "pid": 390,
            "code": 3299
          },
          {
            "name": "临海市",
            "pid": 390,
            "code": 3300
          },
          {
            "name": "玉环县",
            "pid": 390,
            "code": 3301
          },
          {
            "name": "三门县",
            "pid": 390,
            "code": 3302
          },
          {
            "name": "天台县",
            "pid": 390,
            "code": 3303
          },
          {
            "name": "仙居县",
            "pid": 390,
            "code": 3304
          }
        ]
      },
      {
        "name": "温州",
        "pid": 31,
        "code": 391,
        "sub": [
          {
            "name": "鹿城区",
            "pid": 391,
            "code": 3305
          },
          {
            "name": "龙湾区",
            "pid": 391,
            "code": 3306
          },
          {
            "name": "瓯海区",
            "pid": 391,
            "code": 3307
          },
          {
            "name": "瑞安市",
            "pid": 391,
            "code": 3308
          },
          {
            "name": "乐清市",
            "pid": 391,
            "code": 3309
          },
          {
            "name": "洞头县",
            "pid": 391,
            "code": 3310
          },
          {
            "name": "永嘉县",
            "pid": 391,
            "code": 3311
          },
          {
            "name": "平阳县",
            "pid": 391,
            "code": 3312
          },
          {
            "name": "苍南县",
            "pid": 391,
            "code": 3313
          },
          {
            "name": "文成县",
            "pid": 391,
            "code": 3314
          },
          {
            "name": "泰顺县",
            "pid": 391,
            "code": 3315
          }
        ]
      },
      {
        "name": "舟山",
        "pid": 31,
        "code": 392,
        "sub": [
          {
            "name": "定海区",
            "pid": 392,
            "code": 3316
          },
          {
            "name": "普陀区",
            "pid": 392,
            "code": 3317
          },
          {
            "name": "岱山县",
            "pid": 392,
            "code": 3318
          },
          {
            "name": "嵊泗县",
            "pid": 392,
            "code": 3319
          }
        ]
      },
      {
        "name": "衢州",
        "pid": 31,
        "code": 393,
        "sub": [
          {
            "name": "衢州市",
            "pid": 393,
            "code": 3320
          },
          {
            "name": "江山市",
            "pid": 393,
            "code": 3321
          },
          {
            "name": "常山县",
            "pid": 393,
            "code": 3322
          },
          {
            "name": "开化县",
            "pid": 393,
            "code": 3323
          },
          {
            "name": "龙游县",
            "pid": 393,
            "code": 3324
          }
        ]
      }
    ]
  },
  {
    "name": "重庆",
    "code": 32,
    "sub": [
      {
        "name": "重庆",
        "pid": 32,
        "code": 394,
        "sub": [
          {
            "name": "合川区",
            "pid": 394,
            "code": 3325
          },
          {
            "name": "江津区",
            "pid": 394,
            "code": 3326
          },
          {
            "name": "南川区",
            "pid": 394,
            "code": 3327
          },
          {
            "name": "永川区",
            "pid": 394,
            "code": 3328
          },
          {
            "name": "南岸区",
            "pid": 394,
            "code": 3329
          },
          {
            "name": "渝北区",
            "pid": 394,
            "code": 3330
          },
          {
            "name": "万盛区",
            "pid": 394,
            "code": 3331
          },
          {
            "name": "大渡口区",
            "pid": 394,
            "code": 3332
          },
          {
            "name": "万州区",
            "pid": 394,
            "code": 3333
          },
          {
            "name": "北碚区",
            "pid": 394,
            "code": 3334
          },
          {
            "name": "沙坪坝区",
            "pid": 394,
            "code": 3335
          },
          {
            "name": "巴南区",
            "pid": 394,
            "code": 3336
          },
          {
            "name": "涪陵区",
            "pid": 394,
            "code": 3337
          },
          {
            "name": "江北区",
            "pid": 394,
            "code": 3338
          },
          {
            "name": "九龙坡区",
            "pid": 394,
            "code": 3339
          },
          {
            "name": "渝中区",
            "pid": 394,
            "code": 3340
          },
          {
            "name": "黔江开发区",
            "pid": 394,
            "code": 3341
          },
          {
            "name": "长寿区",
            "pid": 394,
            "code": 3342
          },
          {
            "name": "双桥区",
            "pid": 394,
            "code": 3343
          },
          {
            "name": "綦江县",
            "pid": 394,
            "code": 3344
          },
          {
            "name": "潼南县",
            "pid": 394,
            "code": 3345
          },
          {
            "name": "铜梁县",
            "pid": 394,
            "code": 3346
          },
          {
            "name": "大足县",
            "pid": 394,
            "code": 3347
          },
          {
            "name": "荣昌县",
            "pid": 394,
            "code": 3348
          },
          {
            "name": "璧山县",
            "pid": 394,
            "code": 3349
          },
          {
            "name": "垫江县",
            "pid": 394,
            "code": 3350
          },
          {
            "name": "武隆县",
            "pid": 394,
            "code": 3351
          },
          {
            "name": "丰都县",
            "pid": 394,
            "code": 3352
          },
          {
            "name": "城口县",
            "pid": 394,
            "code": 3353
          },
          {
            "name": "梁平县",
            "pid": 394,
            "code": 3354
          },
          {
            "name": "开县",
            "pid": 394,
            "code": 3355
          },
          {
            "name": "巫溪县",
            "pid": 394,
            "code": 3356
          },
          {
            "name": "巫山县",
            "pid": 394,
            "code": 3357
          },
          {
            "name": "奉节县",
            "pid": 394,
            "code": 3358
          },
          {
            "name": "云阳县",
            "pid": 394,
            "code": 3359
          },
          {
            "name": "忠县",
            "pid": 394,
            "code": 3360
          },
          {
            "name": "石柱",
            "pid": 394,
            "code": 3361
          },
          {
            "name": "彭水",
            "pid": 394,
            "code": 3362
          },
          {
            "name": "酉阳",
            "pid": 394,
            "code": 3363
          },
          {
            "name": "秀山",
            "pid": 394,
            "code": 3364
          }
        ]
      }
    ]
  },
  {
    "name": "香港",
    "code": 33,
    "sub": [
      {
        "name": "香港",
        "pid": 33,
        "code": 395,
        "sub": [
          {
            "name": "沙田区",
            "pid": 395,
            "code": 3365
          },
          {
            "name": "东区",
            "pid": 395,
            "code": 3366
          },
          {
            "name": "观塘区",
            "pid": 395,
            "code": 3367
          },
          {
            "name": "黄大仙区",
            "pid": 395,
            "code": 3368
          },
          {
            "name": "九龙城区",
            "pid": 395,
            "code": 3369
          },
          {
            "name": "屯门区",
            "pid": 395,
            "code": 3370
          },
          {
            "name": "葵青区",
            "pid": 395,
            "code": 3371
          },
          {
            "name": "元朗区",
            "pid": 395,
            "code": 3372
          },
          {
            "name": "深水埗区",
            "pid": 395,
            "code": 3373
          },
          {
            "name": "西贡区",
            "pid": 395,
            "code": 3374
          },
          {
            "name": "大埔区",
            "pid": 395,
            "code": 3375
          },
          {
            "name": "湾仔区",
            "pid": 395,
            "code": 3376
          },
          {
            "name": "油尖旺区",
            "pid": 395,
            "code": 3377
          },
          {
            "name": "北区",
            "pid": 395,
            "code": 3378
          },
          {
            "name": "南区",
            "pid": 395,
            "code": 3379
          },
          {
            "name": "荃湾区",
            "pid": 395,
            "code": 3380
          },
          {
            "name": "中西区",
            "pid": 395,
            "code": 3381
          },
          {
            "name": "离岛区",
            "pid": 395,
            "code": 3382
          }
        ]
      }
    ]
  },
  {
    "name": "澳门",
    "code": 34,
    "sub": [
      {
        "name": "澳门",
        "pid": 34,
        "code": 396,
        "sub": [
          {
            "name": "澳门",
            "pid": 396,
            "code": 3383
          }
        ]
      }
    ]
  },
  {
    "name": "台湾",
    "code": 35,
    "sub": [
      {
        "name": "台湾",
        "pid": 35,
        "code": 397,
        "sub": [
          {
            "name": "台北",
            "pid": 397,
            "code": 3384
          },
          {
            "name": "高雄",
            "pid": 397,
            "code": 3385
          },
          {
            "name": "基隆",
            "pid": 397,
            "code": 3386
          },
          {
            "name": "台中",
            "pid": 397,
            "code": 3387
          },
          {
            "name": "台南",
            "pid": 397,
            "code": 3388
          },
          {
            "name": "新竹",
            "pid": 397,
            "code": 3389
          },
          {
            "name": "嘉义",
            "pid": 397,
            "code": 3390
          },
          {
            "name": "宜兰县",
            "pid": 397,
            "code": 3391
          },
          {
            "name": "桃园县",
            "pid": 397,
            "code": 3392
          },
          {
            "name": "苗栗县",
            "pid": 397,
            "code": 3393
          },
          {
            "name": "彰化县",
            "pid": 397,
            "code": 3394
          },
          {
            "name": "南投县",
            "pid": 397,
            "code": 3395
          },
          {
            "name": "云林县",
            "pid": 397,
            "code": 3396
          },
          {
            "name": "屏东县",
            "pid": 397,
            "code": 3397
          },
          {
            "name": "台东县",
            "pid": 397,
            "code": 3398
          },
          {
            "name": "花莲县",
            "pid": 397,
            "code": 3399
          },
          {
            "name": "澎湖县",
            "pid": 397,
            "code": 3400
          }
        ]
      }
    ]
  }
];
}($);
// jshint ignore: end

/* global $:true */
/* jshint unused:false*/

+ function($) {
  "use strict";

  var defaults;
  var raw = $.rawCitiesData;

  var format = function(data) {
    var result = [];
    for(var i=0;i<data.length;i++) {
      var d = data[i];
      if(/^请选择|市辖区/.test(d.name)) continue;
      result.push(d);
    }
    if(result.length) return result;
    return [];
  };

  var sub = function(data) {
    if(!data.sub) return [{ name: '', code: data.code }];  // 有可能某些县级市没有区
    return format(data.sub);
  };

  var getCities = function(d) {
    for(var i=0;i< raw.length;i++) {
      if(raw[i].code === d || raw[i].name === d) return sub(raw[i]);
    }
    return [];
  };

  var getDistricts = function(p, c) {
    for(var i=0;i< raw.length;i++) {
      if(raw[i].code === p || raw[i].name === p) {
        for(var j=0;j< raw[i].sub.length;j++) {
          if(raw[i].sub[j].code === c || raw[i].sub[j].name === c) {
            return sub(raw[i].sub[j]);
          }
        }
      }
    }
  };

  var parseInitValue = function (val) {
    var p = raw[0],c,d;
    var tokens = val.split(' ');
    raw.map(function (t) {
      if (t.name === tokens[0]) p = t;
    });

    p.sub.map(function (t) {
      if (t.name === tokens[1]) c = t;
    })

    if (tokens[2]) {
      c.sub.map(function (t) {
        if (t.name === tokens[2]) d = t;
      })
    }

    if (d) return [p.code, c.code, d.code];
    return [p.code, c.code];
  }

  $.fn.cityPicker = function(params) {
    params = $.extend({}, defaults, params);
    return this.each(function() {
      var self = this;
      
      var provincesName = raw.map(function(d) {
        return d.name;
      });
      var provincesCode = raw.map(function(d) {
        return d.code;
      });
      var initCities = sub(raw[0]);
      var initCitiesName = initCities.map(function (c) {
        return c.name;
      });
      var initCitiesCode = initCities.map(function (c) {
        return c.code;
      });
      var initDistricts = sub(raw[0].sub[0]);

      var initDistrictsName = initDistricts.map(function (c) {
        return c.name;
      });
      var initDistrictsCode = initDistricts.map(function (c) {
        return c.code;
      });

      var currentProvince = provincesName[0];
      var currentCity = initCitiesName[0];
      var currentDistrict = initDistrictsName[0];

      var cols = [
          {
            displayValues: provincesName,
            values: provincesCode,
            cssClass: "col-province"
          },
          {
            displayValues: initCitiesName,
            values: initCitiesCode,
            cssClass: "col-city"
          }
        ];

        if(params.showDistrict) cols.push({
          values: initDistrictsCode,
          displayValues: initDistrictsName,
          cssClass: "col-district"
        });

      var config = {

        cssClass: "city-picker",
        rotateEffect: false,  //为了性能
        formatValue: function (p, values, displayValues) {
          return displayValues.join(' ');
        },
        onChange: function (picker, values, displayValues) {
          var newProvince = picker.cols[0].displayValue;
          var newCity;
          if(newProvince !== currentProvince) {
            var newCities = getCities(newProvince);
            newCity = newCities[0].name;
            var newDistricts = getDistricts(newProvince, newCity);
            picker.cols[1].replaceValues(newCities.map(function (c) {
              return c.code;
            }), newCities.map(function (c) {
              return c.name;
            }));
            if(params.showDistrict) picker.cols[2].replaceValues(newDistricts.map(function (d) {
              return d.code;
            }), newDistricts.map(function (d) {
              return d.name;
            }));
            currentProvince = newProvince;
            currentCity = newCity;
            picker.updateValue();
            return false; // 因为数据未更新完，所以这里不进行后序的值的处理
          } else {
            if(params.showDistrict) {
              newCity = picker.cols[1].displayValue;
              if(newCity !== currentCity) {
                var districts = getDistricts(newProvince, newCity);
                picker.cols[2].replaceValues(districts.map(function (d) {
                  return d.code;
                }), districts.map(function (d) {
                  return d.name;
                }));
                currentCity = newCity;
                picker.updateValue();
                return false; // 因为数据未更新完，所以这里不进行后序的值的处理
              }
            }
          }
          //如果最后一列是空的，那么取倒数第二列
          var len = (values[values.length-1] ? values.length - 1 : values.length - 2)
          $(self).attr('data-code', values[len]);
          $(self).attr('data-codes', values.join(','));
          if (params.onChange) {
            params.onChange.call(self, picker, values, displayValues);
          }
        },

        cols: cols
      };

      if(!this) return;
      var p = $.extend({}, params, config);
      //计算value
      var val = $(this).val();
      if (!val) val = '北京 北京 东城区';
      currentProvince = val.split(" ")[0];
      currentCity = val.split(" ")[1];
      currentDistrict= val.split(" ")[2];
      if(val) {
        p.value = parseInitValue(val);
        if(p.value[0]) {
          var cities = getCities(p.value[0]);
          p.cols[1].values = cities.map(function (c) {
            return c.code;
          });
          p.cols[1].displayValues = cities.map(function (c) {
            return c.name;
          });
        }

        if(p.value[1]) {
          if (params.showDistrict) {
            var dis = getDistricts(p.value[0], p.value[1]);
            p.cols[2].values = dis.map(function (d) {
              return d.code;
            });
            p.cols[2].displayValues = dis.map(function (d) {
              return d.name;
            });
          }
        } else {
          if (params.showDistrict) {
            var dis = getDistricts(p.value[0], p.cols[1].values[0]);
            p.cols[2].values = dis.map(function (d) {
              return d.code;
            });
            p.cols[2].displayValues = dis.map(function (d) {
              return d.name;
            });
          }
        }
      }
      $(this).picker(p);
    });
  };

  defaults = $.fn.cityPicker.prototype.defaults = {
    showDistrict: true //是否显示地区选择
  };

}($);