<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<HTML>
<HEAD>
<TITLE>A frameset document</TITLE>
</HEAD>
<frameset rows="10%,80%,10%">
    <FRAME name="fixed" src="{{URL::to('lookupjob')}}">
<FRAMESET cols="25%,70%,10%">
   <FRAME name="fixed" src="{{URL::to('tender')}}">
   <FRAME name="dynamic" src="{{URL::to('deploytender')}}">
    <FRAME name="rightside" src="{{URL::to('deploytender')}}">
</FRAMESET>
<FRAME name="footer" src="{{URL::to('deploytender')}}">
</frameset>
</HTML>
