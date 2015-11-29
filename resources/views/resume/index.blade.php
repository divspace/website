@extends('layouts.master')
@section('content')
  <div id="resume">
    <h1 class="resume-title">Kyle Anderson</h1>
    <p class="resume-contact">
      Scottsdale, AZ <strong>&middot;</strong> <a href="tel:{{ obfuscate(preg_replace('/^\+1([0-9]{3})([0-9]{3})([0-9]{4})$'/, '($1) $2-$3', env('TWILIO_NUMBER'))) }}">{{ obfuscate(env('TWILIO_NUMBER')) }}</a> <strong>&middot;</strong> <a href="#" data-toggle="modal" data-target="#contact">{{ obfuscate('kyle@divspace.com') }}</a><span class="hidden-sm-down"> <strong>&middot;</strong> <a href="https://www.linkedin.com/in/divspace">linkedin.com/in/divspace</a></span>
    </p>
    <div class="resume-short-description hidden-lg-down">
      <p class="hidden-sm-down">Versatile and efficiency focused front- / back-end developer and programmer.</p>
      <p>Dedicated to building quality, high performance digital experiences, with a passion for translating complex requirements into elegant, functional code.</p>
    </div>
    <div class="resume-long-description hidden-lg-down">
        <p>Leverage technical expertise and creativity to innovate web properties that <strong>simplify complexity and enhance user experiences</strong>.</p>
        <p><strong>Thrive in both highly autonomous roles and collaborative team environments</strong> that are conducive to iteration and idea sharing.</p>
        <p>Design and architect websites and web applications with a focus on user experiences and <strong>making information easier to grasp</strong>.</p>
    </div>
    <h3 class="resume-section">Professional Experience</h3>
    <div class="resume-job">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 resume-job-position">
          <strong>Programmer</strong><span class="hidden-xs-down"> &mdash; <a href="http://mediasolutionscorp.com">Media Solutions</a> &mdash; Chandler, AZ</span>
        </div>
        <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-4 resume-job-duration">
          <em>July 2015 &ndash; November 2015</em>
        </div>
      </div>
      <ul>
        <li>Easily jumped into existing Laravel 4 and Laravel 5 projects and provided new ways to increase productivity by introducing Gulp for task automation, Bower for managing JavaScript and CSS libraries, and Sass for improved readability and organization for CSS.</li>
        <li>Removed repetitive code and template variables with the DRY principle by creating repositories, transformers, presenters, and view composers.</li>
      </ul>
    </div>
    <div class="resume-job">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 resume-job-position">
          <strong>Chief Technology Officer</strong><span class="hidden-xs-down"> &mdash; <a href="http://www.smartsourcellc.com">SmartSource</a> &mdash; New York, NY</span>
        </div>
        <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-4 resume-job-duration">
          <em>September 2014 &ndash; April 2015</em>
        </div>
      </div>
      <ul>
        <li>Designed and built out Smart Source Hosting's entire technical infrastructure, including setting up Amazon Web Services (AWS) cloud hosting, implementing server hardening and security, identifying billing / payment processing solutions, and developing the site.</li>
        <li>Established Smart Source Hosting's social media presence and a high-ROI digital marketing strategy, including PPC, SEM, SMM, SEO, and email campaigns that achieved a 28% open rate.</li>
      </ul>
    </div>
    <div class="resume-job">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 resume-job-position">
          <strong>Co-Founder &amp; CTO</strong><span class="hidden-xs-down"> &mdash; <a href="https://www.crucialhosting.com">Crucial Web Hosting</a> &mdash; Queen Creek, AZ</span>
        </div>
        <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-4 resume-job-duration">
          <em>March 2006 &ndash; August 2014</em>
        </div>
      </div>
      <ul>
        <li>Established and manage all aspects of the hosting businesses, from infrastructure development and maintenance to customer acquisition, web design and development, billing, and support.</li>
        <li>Grew Crucial Web Hosting into $1MM+ in annual revenues through targeted marketing, consistent infrastructure modernization, and by providing outstanding user experiences.</li>
        <li>Wrote blog and knowledge base articles to help clients and increase Crucial Web Hosting's online presence. Created content that earned prominent placement in industry publications, such as <em>Smashing Magazine</em> and <em>A List Apart</em>.</li>
        <li>Introduced Magento and established Crucial Web Hosting as the industry's most prominent hosting provider for the emerging ecommerce solution. Served as a technical product expert, which earned Crucial Web Hosting placement on Magento's wiki and differentiated the company.</li>
      </ul>
    </div>
    <div class="resume-job">
      <div class="row">
        <div class="col-md-8 col-lg-8 col-xl-8 resume-job-position">
          <strong>IT Director</strong><span class="hidden-xs-down"> &mdash; <a href="http://www.bndlithoaz.com">B&amp;D Litho</a> &mdash; Phoenix, AZ</span>
        </div>
        <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-4 resume-job-duration">
          <em>August 2001 &ndash; May 2002</em>
        </div>
      </div>
      <ul>
        <li>Managed all aspects of the company's technical infrastructure, including installing, updating, and administering hardware, systems software, applications software, and configurations. Constantly evaluated system to identify and address opportunities to improve reliability, availability, and security. Served as a technical support resource for end-users.</li>
        <li>Developed B&amp;D Litho's online presence and introduced user-friendly technical enhancements to streamline the media submittal process and increase efficiency in the Graphic Design department.</li>
      </ul>
    </div>
    <h3 class="resume-section">Select Technical Skills</h3>
    <div class="resume-skills">
      <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 resume-skill-section">Programming Languages</div>
        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 resume-skill-items">Bash, JavaScript, Perl, PHP, SQL</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 resume-skill-section">PHP Frameworks</div>
        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 resume-skill-items">CodeIgniter, Laravel, Slim, Symfony, Yii</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 resume-skill-section">JavaScript Frameworks</div>
        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 resume-skill-items">AngularJS, Node.js, Socket.IO, Vue.js</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 resume-skill-section">Solution Stacks</div>
        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 resume-skill-items">LAMP, LEMP, MAMP, MEAN, XAMPP</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3 col-xl-3 resume-skill-section">Data Storage</div>
        <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9 col-xl-9 resume-skill-items">MongoDB, MySQL, Redis</div>
      </div>
    </div>
  </div>
@stop
