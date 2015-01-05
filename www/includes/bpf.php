<?php
# --------------------------------------------------------------------------
# Copyright (C) 2010 
# Edward Fjellskål <edward.fjellskaal@gmail.com>
# Dave Lowe <seclistinbox@gmail.com>
# Leon Ward <leon@openfpc.org>
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
# --------------------------------------------------------------------------


    $out = "";
    $out .= "  <form method=\"post\" name=\"search\" action=\"\">\n";
    $out .= "  <div class=\"span-16 \">\n";
    $out .= "        <fieldset>\n";
    $out .= "          <legend>BPF</legend>\n";
    $out .= "          <p>\n";
    $out .= "            <label for=\"bpf\">BPF expression</label>\n";
    $out .= "            <br />\n";
    $out .= "            <input name=\"bpf\" type=\"text\" class=\"longText\" id=\"bpf\" />\n";
    $out .= "          </p>\n";
    $out .= "        </fieldset>\n";
    $out .= "      </div>\n";
    $out .= "      <div class=\"span-16 last \">\n";
    $out .= "        <p>\n";
    $out .= "          <input type=\"submit\" name=\"op\" value=\"Fetch pcap from BPF\" />\n";
    $out .= "        </p>\n";
    $out .= "      </div>\n";
    $out .= "  </form>\n";
    $out .= "</div>\n";
    return $out;
