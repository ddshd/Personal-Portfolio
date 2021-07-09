<?php

class Project
{
    private $header = '';
    private $title = '';
    private $short_url = '';
    private $description = '';
    private $live = '';
    private $archive = '';
    private $source_code = '';
    private $flags = '';
    private $image = "";
    private $css = array();
    private $contactForSourceCode = '';

    function setName($name)
    {
        $this->header = "<div class='projects $name'>";
    }

    function setTitle($t)
    {
        $this->title = "<h2>$t</h2>";
    }

    function setShortURL($url)
    {
        $this->short_url = "<h6>$url</h6>";
    }

    function setContactForSourceCode() {
      $this->contactForSourceCode = "<center><a href=\"#mailgo\" class=\"email_popup dark\" data-address=\"contact\" data-domain=\"iamdhrumilshah.com\"><i class='fas fa-envelope tooltip recruiterOnlyButton'><span>
      
      Contact me to take a look at the source code
      
      </span>
      
      
      <span class=\"tooltiptext recruiterOnlyButtonLabel\" style=\"font-size:x-small;width: fit-content;top: 120%;left: 50%;\">Available to recruiters only.</span>
      
      
      </i></a></center><br>";
    }

    function setDescription($d)
    {
        $this->description = "<h5>$d</h5>";
    }

    function setLiveURL($url)
    {
        $this->live = "<a href='$url' target='_blank'><i class='fas fa-link'><span> Live Version</span></i></a>";
    }

    function setArchiveURL($url)
    {
        $this->archive = "<a href='$url' target='_blank'><i class='fas fa-archive'><span> Archived Version</span></i></a>";
    }

    function setSourceCode($url)
    {
        $this->source_code = "<br><br><a href='$url' target='_blank'><i class='fas fa-code'><span> Source Code</span></i></a>";
    }

    function image($name)
    {
        $this->image = "<div id=\"image\" style=\"background-image:url(" . localDevEnvironment() . "/img/projects/" . $name . ");\"></div>";
    }

    function setFlags($flagArr)
    {
        $this->flags .= "<table id='cornericon-container'><tr>";
        foreach ($flagArr as $key) {
            $icon = "";
            $text = "";
            switch ($key) {
                case "CLOSED_SOURCE":
                    $text = "Closed Source.";
                    $icon = "fa-lock";
                    break;
                case "PAID_WORK":
                    $text = "Paid Work.";
                    $icon = "fa-hand-holding-usd";
                    break;
                case "SCHOOL_PROJECT":
                    $text = "Completed as part of university project.";
                    $icon = "fa-university";
                    break;
            }
            $this->flags .= "<td><i class=\"fas $icon tooltip cornericon\"><span class=\"tooltiptext\" style=\"font-size:x-small;\">$text</span></i></td>";
        }
        $this->flags .= "</tr></table><br>";
    }

    function toString()
    {
        $returnString = "";
        for ($i = 0; $i < count($this->css); $i++) {
            $returnString .= '<style>' . $this->css[$i] . "</style>";
        }

        return
            $returnString .
            $this->header .
            $this->flags .
            $this->title .
            $this->short_url .
            $this->description .
            $this->live .
            $this->archive .
            $this->source_code .
            $this->contactForSourceCode .
            $this->image .
            "</div>";
    }
}


$json = '{
    "projects": [
      {
        "name": "sayonallc",
        "title": "Sayona",
        "short_url": "sayonallc.com",
        "description": "A business working to create a chain of amazing convenience store in the Roanoke Valley area.",
        "live_url": "https://sayonallc.com/",
        "flags": [
          "PAID_WORK",
          "CLOSED_SOURCE"
        ],
        "image_name": "sayona.png"
      },
      {
        "name": "kevinhackett",
        "title": "Kevin Hackett",
        "short_url": "iamkevinhackett.com",
        "description": "Kevin Hackett is an up-and-coming artist from Vancouver, BC, Canada.",
        "live_url": "https://iamkevinhackett.com/",
        "archive_url": "https://web.archive.org/web/20190629011606/https://iamkevinhackett.com/",
        "flags": [
          "PAID_WORK",
          "CLOSED_SOURCE"
        ],
        "image_name": "kevinhackett.png"
      },
      {
        "name": "culdesac",
        "title": "Culdesac",
        "short_url": "culdesacbrand.com",
        "description": "Culdesac is a brand initiated in Vancouver, BC, Canada which showcases inspiring artists and a clothing brand showcasing the Culdesac brand.",
        "live_url": "https://culdesacbrand.com/",
        "archive_url": "https://web.archive.org/web/20190703053023/https://culdesacbrand.com/",
        "flags": [
          "PAID_WORK",
          "CLOSED_SOURCE"
        ],
        "image_name": "culdesacbrand.png"
      },
      {
        "name": "VTClassSearch",
        "title": "VT (Easy) Class Search",
        "short_url": "iamdhrumilshah.com/vt",
        "description": "A website to enable faster search into Virginia Tech\'s class timetable.",
        "live_url": "https://iamdhrumilshah.com/vt",
        "source_url": "https://github.com/ddshd/VTClassSearch/",
        "image_name": "VTClassSearch.png"
      },
      {
        "name": "SayonaReportingDatabase",
        "title": "Business Revenue Reporting",
        "description": "An MySQL powered fully featured business reporting software. Written in PHP and Javascript with Bootstrap. The entire system was build from ground up for the needs of the business and has been in prodction since late 2016.<br><br>This project is an internal tool used by the business, there is no public access.",
        "flags": [
          "PAID_WORK",
          "CLOSED_SOURCE"
        ],
        "image_name": "SayonaReportingDatabase.png"
      },
      {
        "name": "BigNum",
        "title": "Big Number Arithmetic",
        "contactForSourceCode": true,
        "description": "This is a java program to correctly process simple math operations on number larger than 64-bit. The program uses a LinkedList to keep each digit of the input number in reverse order and then apply basic operations on each number as we learned in elementary school. The operations currently supported are addition, multiplication, and exponentiation. The input must be supplied into the program through a text file in Reverse Polish notations (RPN)."
      },
      {
        "name": "CustomShell",
        "title": "User Customizable Shell",
        "contactForSourceCode": true,
        "description": "This program implements a custom shell prompt, complete with job control, signal handling, pipes, I/O redirection, and exclusive terminal access. The behavior is very similar to /bin/bash, however, it was built from scratch. Users also have an option to quickly customize their prompt to their personal desire using basic on-screen commands. The program frees all memory upon exiting and is leak-free."
      },
      {
        "name": "BinaryHeapSort",
        "title": "Buffered External Binary Data Sorting",
        "contactForSourceCode": true,
        "description": "This java program can sort a binary file containing records of 4 bytes, represented as a key and a value, each taking up 2 bytes. The program will apply the Heapsort algorithm to sort the data, and all data access will be made through an LRU (Least-Recently Used) buffer to minimize disk reads and writes. The program follows standard OOP and documentation procedures."
      },
      {
        "name": "DNAtree",
        "title": "DNA Tree",
        "contactForSourceCode": true,
        "description": "A very simple java program that can organize two of the most common biological DNA and RNA sequences into a tree. The tree is a custom designed data structure that can support insertion, removal, traversal, and printing."
      },
      {
        "name": "ThreadPoolAPI",
        "title": "Multithreading API",
        "contactForSourceCode": true,
        "description": "This is an easy-to-use multithreading API that any existing program can use to add basic multithreading capability and its performance improvements quickly and easily. This is a fork-join thread pool, which will set up several workers who will keep track of their own and other worker’s pool of jobs. Workers will work through their own list of jobs before stealing jobs from other workers instead of staying idle. The list of jobs is implemented using a LinkedList."
      },
      {
        "name": "WebServer",
        "title": "Simplified HTTP Web Server",
        "contactForSourceCode": true,
        "description": "This is a simple web server written in C from the ground up. The web server application can serve static files, handle JWT cookie based authentication, and MP4 streaming. This includes, but not limited to, but is not limited to: sending correct MIME-types for most major file types, correctly handling Content-Range headers for streaming, IPv4 and/or IPv6 support, and HTML5 fallback mode. The application has also been updated to handle HTTP/1.1 and HTTP/2 requests. The server is designed to take advantage of multithreading to ensure fast response to multiple concurrent users."
      },
      {
        "name": "Malloc",
        "title": "Dynamic storage allocator",
        "contactForSourceCode": true,
        "description": "This is a dynamic storage allocator implemented using a segregated free list. The API is fully functional with the ability to malloc, free, and realloc memory a program to be able to use. This API is a functionally identical memory allocator to malloc from stdlib.h, however, with improved performance."
      }
    ]
  }';
