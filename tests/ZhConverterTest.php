<?php

namespace Rny\ZhConverter;
 
class ZhConverterTest extends \PHPUnit_Framework_TestCase {
 
  public function test_zh2hant()
  {
    $text = "无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望";
    $text_expect = "無疑，這個村子瀰漫着一種懶散而頹廢的感覺>，這種感覺讓我覺得非常的難受，比曾經我見過的那個無限輪迴的死村還難受，畢竟無限輪迴還有破除的消，這村子裡的這種氣氛無疑就是一種絕望";
    $this->assertEquals(ZhConverter::zh2hant($text), $text_expect);
  }

  public function test_zh2hans()
  {
    $text = "無疑，這個村子瀰漫着一種懶散而頹廢的感覺>，這種感覺讓我覺得非常的難受，比曾經我見過的那個無限輪迴的死村還難受，畢竟無限輪迴還有破除的消，這村子裡的這種氣氛無疑就是一種絕望";
    $text_expect = "无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望";
    $this->assertEquals(ZhConverter::zh2hans($text), $text_expect);
  }

  public function test_zh2TW()
  {
    $text = "无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望";
    $text_expect = "無疑，這個村子瀰漫著一種懶散而頹廢的感覺>，這種感覺讓我覺得非常的難受，比曾經我見過的那個無限輪迴的死村還難受，畢竟無限輪迴還有破除的消，這村子裡的這種氣氛無疑就是一種絕望";
    $this->assertEquals(ZhConverter::zh2TW($text), $text_expect);
  }

  public function test_zh2HK()
  {
    $text = "无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望";
    $text_expect = "無疑，這個村子瀰漫着一種懶散而頹廢的感覺>，這種感覺讓我覺得非常的難受，比曾經我見過的那個無限輪迴的死村還難受，畢竟無限輪迴還有破除的消，這村子裏的這種氣氛無疑就是一種絕望";
    $this->assertEquals(ZhConverter::zh2HK($text), $text_expect);
  }

  public function test_zh2CN()
  {
    $text = "無疑，這個村子瀰漫着一種懶散而頹廢的感覺>，這種感覺讓我覺得非常的難受，比曾經我見過的那個無限輪迴的死村還難受，畢竟無限輪迴還有破除的消，這村子裡的這種氣氛無疑就是一種絕望";
    $text_expect = "无疑，这个村子弥漫着一种懒散而颓废的感觉>，这种感觉让我觉得非常的难受，比曾经我见过的那个无限轮回的死村还难受，毕竟无限轮回还有破除的消，这村子里的这种气氛无疑就是一种绝望";
    $this->assertEquals(ZhConverter::zh2CN($text), $text_expect);
  }

}
