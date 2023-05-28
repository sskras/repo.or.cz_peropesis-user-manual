<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="keywords" content="operating system, Linux, OS, software, program">
  <meta name="description" content="This site provides information on how to use the Peropesis Linux operating system.">
  <meta name="author" content="Peropesis">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peropesis Linux OS user manual</title>
  <link rel="stylesheet" type="text/css" media="screen" href="../stilius.css">
  <link rel="shortcut icon" type="image/png" href="../Peropesis_logo_s.png">
  </head>
  <body>

<!--Kalba-->
  <div class="kalba">
  English | <a href="/lt">Lietuviškai</a>
  </div>

<!--Logo-->
  <div class="logo">
  <pre>
####  #### ####   ###   ####  ####  #### #  ####
#   # #    #   # #   #  #   # #     #    #  #
####  ###  #### #     # ####  ###     #  #    #
#     #    #  #  #   #  #     #        # #     #
#     #### #   #  ###   #     #### ####  # ####

                       <span style="line-height:10px;">Personal operating system</span></pre>
  </div>

  <div class="pagrindinis">
  
  <div class="kaire">

  <ul>
  <li><a href="/">HOME</a></li>
  </ul>
  <p>Info</p>
  <hr class="meniu">
  <ul>
  <li><a href="/about-peropesis">ABOUT</a></li>
  <li><a href="/get-peropesis">GET PEROPESIS</a></li>
  <li><a href="/user-manual">USER MANUAL</a></li>
  </ul>
  <p>Communication</p>
  <hr class="meniu">
  <ul>
  <li><a href="/bugs">BUGS REPORT</a></li>
  <li><a href="/mailing-list">MAILING LIST</a></li>
  <li><a href="/forum">FORUM</a></li>
  </ul>

  </div>

  <div class="desine">

  <p><span class="pavadinimas">PEROPESIS LINUX OS USER MANUAL</span></p>
  <p class="turinys">This is Peropesis Linux operating system user manual. This manual contains basic information about how to use the Peropesis Linux operating system. If you have any questions, comments or suggestions about the information contained in this manual, you can write about it in the Peropesis <a href="/forum">forum</a> or by e-mail: info(at)peropesis.org.</p>

  <hr class="pavadinimas">

  <p><span class="pavadinimas">Content</span></p>

  <dl>
  <dt><a href="#introduction">1. Introduction</a></dt>
  <dd><a href="#typographical-markings">1.1 Typographical markings</a></dd>

  <dt><a href="#peropesis-live-linux-os-booting">2. Booting</a></dt>
  <dd><a href="#saving-peropesis-live-iso-image-to-usb-drive-in-windows-environment">2.1 Saving the Peropesis live ISO image to a USB drive in Microsoft Windows environment</a></dd>
  <dd><a href="#saving-peropesis-live-iso-image-to-usb-drive-in-Linux-environment">2.2 Saving the Peropesis live ISO image to a USB drive in Linux environment</a></dd>
  <dd><a href="#saving-an-ISO-image-using-dd">2.2.1 Saving an ISO image by using the dd program available through the Shell interpreter</a></dd>
  <dd><a href="#saving-an-ISO-image-using-startup-disk-creator">2.2.2 Saving an ISO image by using the Startup Disk Creator program available through the graphical environment</a></dd>
  <dd><a href="#peropesis-live-booting-from-usb-drive">2.3 Peropesis live OS booting from USB drive</a></dd>
  <dd><a href="#peropesis-live-booting-using-virtualbox-gui">2.4 Peropesis live booting by using virtual machine, VirtualBox (GUI)</a></dd>
  <dd><a href="#peropesis-live-booting-using-virtualbox-cli">2.5 Peropesis live booting by using virtual machine, VirtualBox (CLI)</a></dd>

  <dt><a href="#login/logout">3. Login / Logout</a></dt>
  <dd><a href="#login">3.1 Login</a></dd>
  <dd><a href="#logout">3.2 Logout</a></dd>
  <dd><a href="#reboot-the-system">3.3 Reboot the system</a></dd>
  <dd><a href="#shutting-down-the-system">3.4 Shutting down the system</a></dd>

  <dt><a href="#command-line-interface">4. Command-line interface (CLI)</a></dt>
  <dd><a href="#shell-commands-and-scripts">4.1 Shell commands and scripts</a></dd>
  <dd><a href="#edit-command-line">4.2 Edit command-line</a></dd>
  <dd><a href="#virtual-console">4.3 Virtual console</a></dd>
  <dd><a href="#screen-manager-screen">4.4 Screen manager - screen</a></dd>

  <dt><a href="#basic-programs">5. Basic programs</a></dt>
  <dd><a href="#program-pwd">5.1 Program pwd</a></dd>
  <dd><a href="#program-cd">5.2 Program cd</a></dd>
  <dd><a href="#program-ls">5.3 Program ls</a></dd>
  <dd><a href="#program-s-nail-email-client">5.4 S-nail email client</a></dd>

  <dt><a href="#help">6. Help</a></dt>
  <dd><a href="#program-option-help">6.1  Program option --help</a></dd>
  <dd><a href="#program-man">6.2 Program man</a></dd>

  <dt><a href="#file-system">7. File system</a></dt>
  <dd><a href="#layout-of-the-Peropesis-file-system">7.1 Layout of the Peropesis file system</a></dd>
  <dd><a href="#searching-for-files">7.2 Searching for files</a></dd>
  <dd><a href="#installing-temporary-devices-in-the-/mnt-directory">7.3 Installing temporary devices in the /mnt directory</a></dd>
  <dd><a href="#to-recover-a-faulty-linux-operating-system-by-using-the-chroot">7.4 To recover a faulty Linux operating system by using the chroot</a></dd>
  
  <dt><a href="#network">8. Network</a></dt>
  <dd><a href="#wired-(ethernet)-connection">8.1 Wired (ethernet) connection</a></dd>
  <dd><a href="#wireless-connection">8.2 Wireless connection</a></dd>

  <dt><a href="#language-characters-display-keyboard">9. Language, characters, display, keyboard</a></dt>
  <dd><a href="#locale">9.1 locale</a></dd>
  <dd><a href="#terminal-font">9.2 Terminal font</a></dd>
  <dd><a href="#keyboard-map">9.3 Keyboard map</a></dd>

  <dt><a href="#installing-new-software">10. Installing new software</a></dt>

  <dt><a href="#unsorted-documentation">11. Unsorted documentation</a></dt>
  <dd><a href="#peropesis-live-iso-image">11.1 Peropesis live ISO image</a></dd>
  <dd><a href="#loading-of-required-firmware">11.2 Loading of required firmware</a></dd>

  </dl>

  <hr class="pavadinimas">

  <p><span id="introduction" class="pavadinimas">1. Introduction</span></p>
  <p><span id="typographical-markings" class="pavadinimas">1.1 Typographical markings</span></p>
  <p class="turinys">Below are explanations of the typographical markings used in the user manual.</p>

  <p class="turinys">1. Words in <b>bold</b> font indicate that they are program names.<br>
  2. Words in <b>bold</b> font and nearby number indicate that they are program documentation man pages. The number represents the section where the program documentation is placed (/usr/share/man/man1-8).<br>
  3. Examples of commands are shown in grey-background tables.<br>
  4. In the example, a command beginning with <b>#</b> sign means that it requires root privileges to execute.<br>
  5. In the example, the command beginning with the <b>$</b> sign means that a simple user right is sufficient for its execution.<br>
  6. In the example, the text beginning without the <b>#</b> and <b>$</b> sign represents the result of the executed command.</p>

  <hr class="pavadinimas">

  <p><span id="peropesis-live-linux-os-booting" class="pavadinimas">2. Booting</span></p>
  <p class="turinys">This chapter is intended to introduce you how to boot Peropesis Linux operating system. This chapter provides two ways to boot Peropesis Linux OS live release on your computer. One of them is by using a USB storage device (after recording the Peropesis ISO image to it), the other is by using a virtual machine. Below is information on how to do this.</p>

  <hr class="pavadinimas">

  <p><span id="saving-peropesis-live-iso-image-to-usb-drive-in-windows-environment" class="pavadinimas">2.1 Saving the Peropesis live ISO image to a USB drive in Microsoft Windows environment</span></p>
  <p class="turinys">Required components<br><br>
  1. Peropesis ISO image. You can download it from <a href="/get-peropesis">here</a>.<br>
  2. 1 GB or higher capacity USB media.<br>
  3. Application for saving files to USB media, for example, <b>Rufus</b>. If this software is not available on your computer, it should be <a target="_blank" href="https://rufus.ie/">downloaded</a> and installed.</p>

  <p class="turinys">Sequence of actions<br><br>
  1. Insert the USB storage device into the computer's USB port.<br>
  2. Open program <b>Rufus</b>.<br>
  3. In the field of <i>Device</i> of the program, select the USB device, to which you want to save the Peropesis ISO image.<br>
  4. In the field of <i>Boot selection</i> of the program, let's select <i>FreeDOS</i> (this will create an automatically bootable USB).<br>
  5. In program options, <i>Partition scheme</i> and <i>Target system</i> leave default options.<br>
  6. Press the SELECT button in the application and find, select and open Peropesis.iso file in an open files manager. After this step in the field of <i>Volume label</i> the existing information should have been updated to <i>Peropesis</i>.<br>
  7. All other options in the program, leave unchanged.<br>
  8. To start Peropesis.iso recording to USB key, press START button.<br>
  9. After step 8 program <b>Rufus</b> can display several warning notifications, for additional files installing, for ISOHybrid image recording, due to the destruction of data on the USB drive. If you got this warning notifications, press OK or YES. Before confirming the destruction of data on a USB device, check that there is no data left on the USB drive that is important to you.</p>

  <p class="turinys">If all options have been set correctly, after step 8 or step 9, the program <b>Rufus</b> had to start recording of Peropesis ISO file to selected USB drive. The status of the task should have changed to <i>Copying ISO files…</i> Because the ISO file of Peropesis live operating system is small, copy process may take up to a minute (depending on your computer specifications). The program will alert you when the copy process is complete - in task status area, note <i>Copying ISO files…</i> will be updated to note <i>Ready</i>. This means that you have created an auto-bootable Peropesis live USB.<p>

  <p class="turinys">How to boot Peropesis live USB to your computer, see <a href="#peropesis-live-booting-from-usb-stick">chapter 2.3</a>.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Pete Batard (2011-2022). Create bootable USB drives the easy way. Link: <a target="_blank" href="https://rufus.ie/en/">https://rufus.ie/en/</a></p>

  <hr class="pavadinimas">

  <p><span id="saving-peropesis-live-iso-image-to-usb-drive-in-Linux-environment" class="pavadinimas">2.2 Saving the Peropesis live ISO image to a USB drive in Linux environment</span></p>

  <p class="turinys">In the Linux environment the Peropesis ISO image can be written to a USB drive using one of the programs available through the graphical user interface (graphical user interface (GUI)) or by using a command-line-based (command line interface (CLI)) program. The following two chapters discuss both of these approaches.</p>

  <hr class="pavadinimas">

  <p><span id="saving-an-ISO-image-using-dd" class="pavadinimas">2.2.1 Saving an ISO image by using the dd program available through the Shell interpreter</span></p>

  <p class="turinys">Required components<br><br>
  1. Peropesis live ISO image. It can be download from <a href="/get-peropesis">here</a>.<br>
  2. 1 GB or higher capacity USB media.<br>
  3. Command-line-based file copying utility <b>dd</b>.</p>

  <p class="turinys">Sequence of actions<br><br>
  1. Connect a USB device to your computer.<br>
  2. Open console. To save a ISO file of Peropesis to a USB drive root authority will be required. Sign as root user. In the directory /dev find which USB device will be used to save the ISO file. USB devices in the /dev category are marked by files sda, sdb, sdc, etc. names Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>ls /dev/sd*</kbd></p>

  <p class="turinys">This command lists all the hard disks on the computer. The last device in the list is the device that you need. To be sure, by one hundred percent, which device is right for you to write Peropesis ISO image, you can enter the ls command in the terminal once with the media inserted in the USB slot, the next time without the USB media inserted. In each case, the number of devices in the list must be different. If you want in other ways to find out what devices are currently connected to the computer, you can do it by using the <b>lsblk</b> or <b>lsusb</b> programs that are often found in other Linux distributions.<br>
  3. To save the Peropesis ISO file to the provided USB drive, enter the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>dd if=Peropesis-*-live.iso of=/dev/sd*</kbd></p>

  <p class="turinys">Because the ISO file of Peropesis live operating system is small, copy process may take up to a minute (depending on your computer specifications).</p>

  <p class="turinys">How to boot Peropesis live USB to your computer, see <a href="#peropesis-live-booting-from-usb-stick">chapter 2.3</a>.</p>

  <hr class="pavadinimas">

  <p><span id="saving-an-ISO-image-using-startup-disk-creator" class="pavadinimas">2.2.2 Saving an ISO image by using the Startup Disk Creator program available through the graphical environment</span></p>

  <p class="turinys">Required components<br><br>
  1. Peropesis live ISO image. It can be download from <a href="/get-peropesis">here</a>.<br>
  2. 1 GB or higher capacity USB media.<br>
  3. The <b>Startup Disk Creator</b> program, which is often found on various Linux desktops.</p>

  <p class="turinys">Sequence of actions<br><br>
  1. Insert a USB memory into the computer's USB port.<br>
  2. Open program <b>Startup Disk Creator</b>.<br>
  3. The program checks your user's Downloads directory at startup and, if the directory contains an ISO file, select this file as the default. If you want to select another ISO file instead of the ISO file selected by the program, you can do so using the <i>Other</i> button, which can be found in the program window. The program also checks the USB media connected to the computer during startup and lists them in the <i>Disk to use</i> field. Select the desired USB device..<br>
  4. If all program options are right for you, press the <i>Make Startup Disk</i> button. Before begin copying an ISO file to a USB drive, the program may display a warning message about the USB drive you have selected, so that we have the opportunity to check again whether there is no data important to you on the selected USB device, which will be destroyed when sopying the Peropesis ISO file. Check and confirm.</p>

  <p class="turinys">If the above sequence of steps was followed correctly, the <b>Startup Disk Creator</b> should have already started copying the Peropesis ISO file to the default USB drive. The status of the task performing by the program should have changed to <i>Writing disk image…</i>. Because the ISO file of Peropesis live operating system is small, copy process may take up to a minute depending on your computer specifications. The program will alert you with an <i>Installation complete</i> notification when the copy process will be complete. If this message appears, it means that you have created an auto-bootable Peropesis live USB</p>

  <p class="turinys">How to boot Peropesis live USB to your computer, see <a href="#peropesis-live-booting-from-usb-stick">chapter 2.3</a>.</p>

  <hr class="pavadinimas">

  <p><span id="peropesis-live-booting-from-usb-drive" class="pavadinimas">2.3 Peropesis live OS booting from USB drive</span></p>
  <p class="turinys">Immediately after the computer was turned on, the basic software starts. One of the main functions of this software is to initiate the startup of the operating system. Old type motherboards have the <i>Basic input/output system</i> - <b>BIOS</b> installed. New type motherboards have the <i>Unified Extensible Firmware Interface</i> - <b>UEFI</b> installed. The Peropesis Linux operating system is compatible with both <b>BIOS</b> and <b>UEFI</b> software.</p>

  <p class="turinys">If you want at startup your PC to boot the Peropesis operating system from the USB drive instead the main operating system which is in hard drive, you must complete two steps: insert a USB memory (with saved Peropesis OS) into the computer's USB port and, if necessary, change the current options (set a specific device to boot from) in the <b>BIOS</b> or <b>UEFI setup</b> program.</p>

  <p class="turinys">The <b>BIOS</b> or <b>UEFI Setup</b> program is opened by pressing the corresponding key immediately after the computer was turned on. Each computer manufacturer has a different opening key for the <b>BIOS</b> or <b>UEFI Setup</b> programs. The most common ones are: ESC, F1, F9, F10, F11, Del etc. Find the right key for your PC. In the opened <b>BIOS</b> or <b>UEFI setup</b> program, we select the Boot category and in the list of devices we find the default USB storage device with Peropesis ISO image written on it. Mark this USB device as the first or only device the operating system to boot from. Save this option, turn of the <b>BIOS</b> or <b>UEFI setup</b> program and if everything was done correctly, the next time of computer startup will boot the Peropesis operating system from the USB drive.</p>

  <p class="turinys">If the Peropesis operating system does not start at the next computer startup time and there are no <i>UEFI USB</i> or <i>USB FLASH</i> media (with Peropesis system) between all available boot devices, then your computer probably supports the <b>UEFI</b> interface. In this case, you should open the <b>UEFI setup</b> program and turn off the <i>Security Boot</i> option in the <i>Boot</i> category. If you turned off the <i>Security Boot</i> option and <b>UEFI</b> interface still does not identify USB devices (with Peropesis), then you should to try to turn on <i>CSM</i> or <i>Legacy</i> options in <b>UEFI Setup</b>. If everything was done correctly, the next time of computer startup only those devices will be identified, that contain recorded ISO images with <b>BIOS</b> enabled bootloaders. Note: if you have <i>Windows</i> installed on your hard disk, when you turn on <i>CSM</i> or <i>Legacy</i> options, devices that have Windows installed will no longer be identified on next computer startup.</p>

  <p class="turinys">How to login to Peropesis operating system, see <a href="#login/logout">chapter 3</a>.</p>

  <hr class="pavadinimas">

  <p><span id="peropesis-live-booting-using-virtualbox-gui" class="pavadinimas">2.4 Peropesis live booting by using virtual machine, VirtualBox (GUI)</span></p>
  <p class="turinys">A virtual machine is a type of program that creates a computer system emulation. Programs of this type extends personal computer functionality, providing it with the architectural features you want, that may be necessary to load the desired software. It is possible to boot the Peropesis operating system on your computer using the virtual machine <b>VirtualBox</b>. This chapter explains how to boot the Peropesis ISO image in a VirtualBox virtual machine using the VirtualBox graphical user interface (GUI).</p>

  <p class="turinys">Required components<br><br>
  1. <b>VirtualBox</b> software. If VirtualBox software is not available on your computer, it can be <a target="_blank" href="https://www.virtualbox.org/wiki/Downloads">download</a> and install.<br>
  2. Peropesis live ISO image. It can be download from <a href="/get-peropesis">here</a>.</p>

  <p class="turinys">Sequence of actions<br><br>
  1. Open program VirtualBox.<br>
  2. Create a virtual machine:<br>
  2.1 in the <i>Name and Operating system</i> table, select the name for the virtual machine, specify the working directory, select the type of operating system (<i>Linux</i>, in this case) and select one of the following Linux distributions (in this case, <i>Other Linux (64-bit)</i>);<br>
  2.2 leave the default options in the <i>Memory size</i> table;<br>
  2.3 because we will use VirtualBox to load Peropesis ISO image in RAM, in this step, <i>Hard Disk</i>, to create virtual hard drive is not necessary, so select <i>Do not create a virtual hard disk</i>. The program may inform you of this choice with a warning message. If this happens, confirm that you understand the message and create a virtual machine without the hard disk by clicking the <i>Continue</i> and/or <i>Create</i> button;<br>
  2.4 if in the previous steps you did everything well, the program should have already created a virtual machine. In this step, we will specify a specific operating system, that we want to load. Select the <i>Settings</i> category from the top <i>Menu bar</i>. In an open table <i>Options</i>, select the <i>Storage</i> subcategory. In the <i>Storage Devices</i> section, select a device <i>Controller: AHCI (SATA)</i> and add a Peropesis.iso file to it (press the green arrow <i>Adds optical drive</i>, find the Peropesis.iso file in the file manager that appears, select it and confirm it with the <i>OK</i> button);<br>
  2.5 now you can try to load the Peropesis.iso file. Press the <i>Start</i> button on the top <i>Menu bar</i>. If in the previous steps everything was done correctly, the loading of the operating system must begin in the newly displayed window.</p>
  
  <p class="turinys">Wider instructions on how to use the VirtualBox machine, see official <a target="_blank" href="https://www.virtualbox.org/manual/UserManual.html">VirtualBox User Manual</a>.</p>

  <p class="turinys">How to login to Peropesis operating system, see <a href="#login/logout">chapter 3</a>.</p>

  <p class="turinys">Below you can watch video about Peropesis live booting by using virtual machine, VirtualBox.</p>

  <p class="turinys">
  <video controls>
  <source src="/media/Peropesis-live-booting-by-using-virtual-machine-VirtualBox.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video> 
  </p>

  <p><b>References</b></p>

  <p class="turinys">1. Oracle Corporation (2004-2022). Oracle® VM VirtualBox® User Manual. Link: <a target="_blank" href="https://www.virtualbox.org/manual/UserManual.html">https://www.virtualbox.org/manual/UserManual.html</a> </p>

  <hr class="pavadinimas">

  <p><span id="peropesis-live-booting-using-virtualbox-cli" class="pavadinimas">2.5 Peropesis live booting by using virtual machine, VirtualBox (CLI)</span></p>

  <p class="turinys">It is possible to boot the Peropesis operating system on your computer using the virtual machine <b>VirtualBox</b>. This chapter explains how to boot the Peropesis ISO image in a VirtualBox virtual machine using the command-line-based VirtualBox interface (CLI) - <b>VBoxManage</b>. VBoxManage is integral part of the Oracle VM VirtualBox software for managing virtual machines using a command line interface. This chapter provides some basic examples of VBoxManage program options and a shell script based on VBoxManage commands. This shell script automatically creates, configures and starts a virtual machine with Peropesis ISO image without any additional effort.</p>

  <p class="turinys">Required components<br><br>
  1. It should be noted that in order to use the VBoxManage tool, it is necessary to have the VirtualBox software installed on your computer. If VirtualBox software is not available on your computer, it should be <a target="_blank" href="https://www.virtualbox.org/wiki/Downloads">downloaded</a> and installed.<br>
  2. Peropesis live ISO image. It can be download from <a href="/get-peropesis">here</a>.</p>

  <p class="turinys">General VBoxManage commands. These commands are typed at the command prompt on your host computer.</p>

  <p class="turinys">1. Creating a virtual machine.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage createvm --name SuperMachine --ostype Linux_64 --register</kbd></p>

  <p class="turinys">2. Setting a minimum base memory for a newly created virtual machine called "Supermachine".</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage modifyvm SuperMachine --cpus 2 --memory 512 --vram 12</kbd></p>

  <p class="turinys">3. Setting a storage device connector standard.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage storagectl SuperMachine --name SATA --add sata --portcount 2 --bootable on</kbd></p>

  <p class="turinys">4. Instructions for the virtual machine to use the Peropesis ISO image. In the command below, instead of the asterisk in the <i>Peropesis-*-live.iso name</i> specify the Peropesis ISO image version number.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage storageattach SuperMachine --storagectl SATA --port 0 --device 0 --type dvddrive --medium Peropesis-*-live.iso</kbd></p>

  <p class="turinys">5. Starting a virtual machine.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage startvm SuperMachine</kbd></p>

  <p class="turinys">6. Stoping a virtual machine.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage controlvm SuperMachine poweroff</kbd></p>

  <p class="turinys">7. Removing a virtual machine.</p>

  <p class="kodas"><samp>$</samp> <kbd>VBoxManage unregistervm SuperMachine --delete</kbd></p>

  <p class="turinys">More information about using the VBoxManage tool can be found in the official documentation of the developer of this software <a target="_blank" href="https://www.oracle.com/technical-resources/articles/it-infrastructure/admin-manage-vbox-cli.html">here</a> and <a target="_blank" href="https://www.virtualbox.org/manual/ch08.html">here</a>.</p>

  <p class="turinys">The above VBoxManage commands can be executed automatically by using a shell script. A pre-written shell script named <b>boot-peropesis.sh</b> can be downloaded from <a href="/peropesis/boot-peropesis.sh">here</a>. Note that this script automatically downloads the latest Peropesis ISO image if you haven't done so before. The script can be initiated by first changing the usage rights of the script file and then typing its name in the command line. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>chmod +x boot-peropesis.sh</kbd><br><samp>$</samp> <kbd>./boot-peropesis.sh</kbd></p>

  <p><b>References</b></p>

  <p class="turinys">1. Yuli Vasiliev (June 2014). Controlling VirtualBox from the Command Line. Link: <a target="_blank" href="https://www.oracle.com/technical-resources/articles/it-infrastructure/admin-manage-vbox-cli.html">https://www.oracle.com/technical-resources/articles/it-infrastructure/admin-manage-vbox-cli.html</a><br>
  2. Oracle and/or its affiliates (2004-2022). User Manual, Chapter 8. VBoxManage. Link: <a target="_blank" href="https://www.virtualbox.org/manual/ch08.html">https://www.virtualbox.org/manual/ch08.html</a></p>

  <hr class="pavadinimas">

  <p><span id="login/logout" class="pavadinimas">3. Login / Logout</span></p>
  <p class="turinys">Immediately after the Peropesis operating system was loaded, the called <b>login</b> program must be visible on the screen. The login program is used to log in to the system. Logging in to the system means creating a user session. This chapter provides instructions on how to create a new and end an existing user session. This chapter also discusses how to reboot or completely shut down the Peropesis operating system.</p>

  <hr class="pavadinimas">

  <p><span id="login" class="pavadinimas">3.1 Login</span></p>
  <p class="turinys">You may login to the Peropesis operating system as <i>root</i> user. There is no password created for this user, so program login will not require password. If you want to create a password for <i>root</i> user, use the program <b>passwd</b>. For example:</p>
  <p class="kodas"><samp>#</samp> <kbd>passwd</kbd></p>
  <p class="turinys">Learn more about the <b>passwd</b> program and its options on the <b>passwd(1)</b> man pages.</p>

  <hr class="pavadinimas">

  <p><span id="logout" class="pavadinimas">3.2 Logout</span></p>
  <p class="turinys">If you want to end root or any other user session, use the program <b>logout</b>. For example:</p>
  <p class="kodas"><samp>$</samp> <kbd>logout</kbd></p>
  <p class="turinys">If you want again to create new session on behalf of <i>root</i> user, <b>login</b> program will require a password (if you have previously created it for a <i>root</i> user).</p>
  <hr class="pavadinimas">

  <p><span id="reboot-the-system" class="pavadinimas">3.3 Reboot the system</span></p>
  <p class="turinys">If you want to restart the Peropesis operating system, you can do so by using the <b>shutdown</b> program in conjunction with the <i>restart</i> option. For example:</p>
  <p class="kodas"><samp>#</samp> <kbd>shutdown -r now</kbd></p>

  <hr class="pavadinimas">

  <p><span id="shutting-down-the-system" class="pavadinimas">3.4 Shutting down the system</span></p>
  <p class="turinys">If you want to shut down the operating system completely, you must also use the <b>shutdown</b> program by setting it to the <i>halt</i> option. For example:</p>
  <p class="kodas"><samp>#</samp> <kbd>shutdown -h now</kbd></p>
  <p class="turinys">Learn more about the <b>shutdown</b> program and its options on the <b>shutdown(8)</b> man pages.</p>
  
  <p class="turinys">Below you can watch video about how to login and logout to Peropesis.</p>

  <p class="turinys">
  <video controls>
  <source src="/media/how-to-login-and-logout-to-Peropesis.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video> 
  </p>

  <hr class="pavadinimas">

  <p><span id="command-line-interface" class="pavadinimas">4. Command-line interface (CLI)</span></p>

  <p class="turinys">At the last stage of the Linux kernel boot, an <b>init</b> program start is initiated. init is the parent of all processes, among all the processes running on the system is marked with PID 1 number. This program initiates the loading/mounting of the file system and controls the management of the system's runlevels by following the instructions described in the <i>/etc/inittab</i> shell script.</p>

  <p class="turinys">Peropesis Linux OS uses the <b>System V</b> style filesystem initialization software. The default runlevel of the Peropesis filesystem is 3. This is a standard multi-user mode without a graphical environment.</p>

  <p class="turinys">After the filesystem is mounted and the system runlevel is set, then init initiates the <b>agetty</b> program startup. agetty opens a tty port, invokes the <b>login</b> program and pushes the system user to sign in / create session.</p>

  <p class="turinys">The program login following the contents of the <i>/etc/passwd</i> file decides with which name and password a new session can be created and predicts what type of shell will be used. This way the shell, command-line interface, finally starts.</p>

  <p class="turinys">The default user interface for the Peropesis Linux operating systems is <b>Bash</b>. Bash is a shell. The shell is both a command-line interpreter and a command programming language. This programming language is designed to manage the system. The command language can be written and executed directly on the command line or the language can be used to create shell scripts that can be executed later. Neither individual commands nor shell scripts need to be compiled before using them. Each time the shell interpreter converts the written commands into machine language and the results of the programs are presented to the system user in a language he understands.</p>

  <p class="turinys">More information about <b>init(8)</b>, <b>agetty(8)</b>, <b>login(1)</b> and <b>bash(1)</b> programs is available on the man pages of these programs. In the following subsections of this chapter individual examples of working on the command line are touched.</p>

  <p><b>References</b></p>
  <p class="turinys">1. Linux Foundation (2010). Run Levels. Link: <a target="_blank" href="https://refspecs.linuxfoundation.org/LSB_4.1.0/LSB-Core-generic/LSB-Core-generic/runlevels.html">https://refspecs.linuxfoundation.org/LSB_4.1.0/LSB-Core-generic/LSB-Core-generic/runlevels.html</a>.<br>
  2. Free Software Foundation (September 26, 2022). Bash Reference Manual. Link: <a target="_blank" href="https://www.gnu.org/software/bash/manual/html_node/index.html">https://www.gnu.org/software/bash/manual/html_node/index.html</a><br>
  3. A group of authors. Shell (computing). Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Shell_(computing)">https://en.wikipedia.org/wiki/Shell_(computing)</a><br>
  4. A group of authors. Interpreter (computing). Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Interpreter_(computing)">https://en.wikipedia.org/wiki/Interpreter_(computing)</a></p>

  <hr class="pavadinimas">

  <p><span id="shell-commands-and-scripts" class="pavadinimas">4.1 Shell commands and scripts</span></p>

  <p class="turinys">Immediately after the system user session was created, the command line interpreter <b>Bash</b> starts. This program is the default user interface of the Peropesis Linux operating system. With the help of an Bash interpreter, the Peropesis Linux operating system can be managed. The system is managed by executing single commands or scripts written in the command programming language. An example of writing a basic command on the command-line:</p>

  <p class="kodas"><samp>$</samp> <kbd>links peropesis.org</kbd></p>

  <p class="turinys">This command opens the peropesis.org website in the <b>links</b> web browser.</p>

  <p class="turinys">An example of creating and executing a simple shell script:</p>

  <p class="kodas"><samp>$</samp> <kbd>cat &gt; mkdir.sh &lt;&lt; "eof"</kbd><br>
  >#!/bin/sh<br>
  >DIR="articles"<br>
  >if [ ! -e "$DIR" ]; then<br>
  >mkdir $DIR<br>
  >fi<br>
  >eof<br>
  <samp>$</samp> <kbd>chmod +x mkdir.sh</kbd><br>
  <samp>$</samp> <kbd>./mkdir.sh</kbd></p>

  <p class="turinys">This shell script checks for the existence of a directory named "articles", if it does not exist, this directory is created.</p>

  <p><b>References</b></p>
  <p class="turinys">1. Machtelt Garrels (2008/12/27). Bash Guide for Beginners. Link: <a target="_blank" href="https://tldp.org/LDP/Bash-Beginners-Guide/html/index.html">https://tldp.org/LDP/Bash-Beginners-Guide/html/index.html</a></p>

  <hr class="pavadinimas">

  <p><span id="edit-command-line" class="pavadinimas">4.2 Edit command-line</span></p>

  <p class="turinys">The Bash interpreter is provided with <b>Readline</b> library functions that allow users to perform editing tasks at a command-line. Both <b>Emacs</b> and <b>vi</b> content editing modes are available. Emacs editing modes is the default setting and therefore Emacs editor keyboard shortcuts work in the Peropesis command-line interface.</p>

  <p class="turinys">The following are the key combinations for editing (Emacs mode):</p>

  <table style="margin-bottom: 20px; width:100%;">
  <tr><td style="width:15%;"><b>Keyboard shortcuts</b></td><td style="width:85%;"><b>Result</b></td></tr>
  <tr><td style="width:15%;">Ctrl+a</td><td style="width:85%;">move the text cursor from the end of a line to the beginning of a line</td></tr>
  <tr><td style="width:15%;">Ctrl+e</td><td style="width:85%;">move the text cursor from the beginning of a line to the end of a line</td></tr>
  <tr><td style="width:15%;">Alt+b</td><td style="width:85%;">move the text cursor back one word</td></tr>
  <tr><td style="width:15%;">Alt+f</td><td style="width:85%;">move the text cursor forward one word</td></tr>
  <tr><td style="width:15%;">Ctrl+w</td><td style="width:85%;">cut one word back</td></tr>
  <tr><td style="width:15%;">Ctrl+u</td><td style="width:85%;">cut the entire part of the line before the text cursor</td></tr>
  <tr><td style="width:15%;">Ctrl+k</td><td style="width:85%;">cut the entire part of the line after the text cursor</td></tr>
  <tr><td style="width:15%;">Ctrl+y</td><td style="width:85%;">paste the last cut word or part of text</td></tr>
  <tr><td style="width:15%;">Ctrl+_</td><td style="width:85%;">undo previous actions</td></tr>
  </table>

  <p class="turinys"><b>Notes</b>:<br>
  1. Ctrl means hold down the Ctrl key.<br>
  2. Alt means hold down the Alt key.</p>

  <p class="turinys">More information about editing tasks at the command-line can be found in the <a target="_blank" href="https://www.gnu.org/software/bash/manual/html_node/Readline-Interaction.html">Bash Reference Manual</a>.</p>

  <p class="turinys">To change the Emacs mode to editor vi mode, the following command must be executed at the command-line:</p>

  <p class="kodas"><samp>$</samp> <kbd>set -o vi</kbd></p>

  <p class="turinys">For more information about editor vi shortcuts see this <a target="_blank" href="https://www.hypexr.org/bash_tutorial.php#vi">Bash Guide</a>.</p>

  <p class="turinys">The command line supports a list/history of previously entered commands. Command history is stored in the <i>~/.bash_history</i> file. In the command-line command history can be viewed using the up arrow. The bottom arrow is used to get back to the end of history. Editing tasks can also be performed with commands that have been executed in the past in the command-line.

  <p><b>References</b></p>
  <p class="turinys">1. 19 September 2022. Readline Interaction. Link: <a target="_blank" href="https://www.gnu.org/software/bash/manual/html_node/Readline-Interaction.html">https://www.gnu.org/software/bash/manual/html_node/Readline-Interaction.html</a><br>
  2. Chet Ramey (Sep 26 2022). The GNU Readline Library. Link: <a target="_blank" href="https://tiswww.case.edu/php/chet/readline/rltop.html">https://tiswww.case.edu/php/chet/readline/rltop.html</a><br>
  3. A group of authors (September 04 2018.). Link: <a target="_blank" href="http://www.hypexr.org/bash_tutorial.php#emacs">http://www.hypexr.org/bash_tutorial.php#emacs</a></p>

  <hr class="pavadinimas">

  <p><span id="virtual-console" class="pavadinimas">4.3 Virtual console</span></p>

  <p class="turinys">The management of Peropesis Linux operating system runlevels is controlled by the <b>init</b> program, according to the instructions defined in the <i>/etc/inittab</i> file. The default runlevel of the Peropesis filesystem is 3. This is a standard multi-user mode without a graphical environment. This multi-user system supports six command-line input/output environments, also known as virtual consoles or virtual terminals.</p>

  <p class="turinys">In the system virtual consoles are identified and labeled with the names of the <i>tty1</i>-<i>tty6</i> devices. These consoles allow users to create six different user sessions on a single system. Different values of environment variables can be defined in each session. Also, in the six different command-line environments can run different programs with different options at the same time.</p>

  <p class="turinys">There is the ability virtual consoles to switch between them. For example, console tty1 can be switched to tty6. <i>ALT+F1</i>-<i>ALT+F6</i> keyboard key combinations are used to switch virtual consoles. Another way to switch between virtual consoles is to use <i>Alt+Right arrow</i> or <i>Alt+Left arrow</i> keyboard shortcuts.</p>

  <p><b>References</b></p>
  <p class="turinys">1. A group of authors. Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Virtual_console">https://en.wikipedia.org/wiki/Virtual_console</a><br>
  2. Linux Foundation (2010). Run Levels Link: <a target="_blank" href="https://refspecs.linuxfoundation.org/LSB_4.1.0/LSB-Core-generic/LSB-Core-generic/runlevels.html">https://refspecs.linuxfoundation.org/LSB_4.1.0/LSB-Core-generic/LSB-Core-generic/runlevels.html</a></p>

  <hr class="pavadinimas">

  <p><span id="screen-manager-screen" class="pavadinimas">4.4 Screen manager - screen</span></p>

  <p class="turinys"><b>Screen</b> is a screen manager that allows users to multiply the virtual console screen several times and allows users to copy and paste text between screens. Some basic examples of using the screen command is presented below.</p>

  <p class="turinys">Example of creating a new screen session, named monitor:</p>

  <p class="kodas"><samp>$</samp> <kbd>screen -S monitor</kbd></p>

  <p class="turinys">The key combinations Ctrl+a and d are used to detach from the session, named monitor. After these actions, the session runs in the background. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then d</kbd></p>

  <p class="turinys">The -r option is used to connect (attach) to a previously created session, named monitor. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>screen -r monitor</kbd></p>

  <p class="turinys">You can also log in an early session by specifying session number instead of session name. The -ls options are used to find the session number. Examples:</p>

  <p class="kodas"><samp>$</samp> <kbd>screen -ls</kbd><br>311.monitor (Detached)</p>

  <p class="kodas"><samp>$</samp> <kbd>screen -r 311</kbd></p>

  <p class="turinys">The exit command is used to end the session. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>exit</kbd></p>

  <p class="turinys">The key combinations Ctrl+a and c are used to create a new shell emulator screen. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then c</kbd></p>

  <p class="turinys">Ctrl+a and 0-9 digit combinations are used to switch between screens. Note that 0 is the first screen screen created. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then [0-9]</kbd></p>

  <p class="turinys">Ctrl+a and Shift+s key combinations are used to display one or more screen screens in a single, horizontally split window. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then Shift+s</kbd></p>

  <p class="turinys">Ctrl+a and | key combinations are used to display one or more screen screens in a single, vertically split window. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then |</kbd></p>

  <p class="turinys">Ctrl+a and Tab key combinations are used to switch between parts of the screen window. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then Tab</kbd></p>

  <p class="turinys">The following are examples of commands for copying and pasting text on the screen.</p>

  <p class="turinys">Ctrl+a and [ keys combinations are used to activate the copy/scroll-back text mode. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then [</kbd></p>

  <p class="turinys">After the copy mode has been activated, “arrows” keys on the keyboard allow you to move around the screen. Move the text cursor to the desired place on the screen.</p>

  <p class="turinys">The space key on the keyboard is used to activate text selection mode. The “arrows” keys are used to select the part of the text that you want to copy. Select desired part of the text.</p>

  <p class="turinys">Use the "space" key on the keyboard to copy the selected text. After pressing space key the selected text is copied and the copy text mode is automatically turned off. The copied text is saved in the buffer.</p>

  <p class="turinys">Ctrl+a and ] keys combinations are used to paste the copied text. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>Ctrl+a, then ]</kbd></p>

  <p class="turinys">Copied text, which is stored in the buffer, can be repeated indefinitely, on different screen screens and in different programs.</p>

  <p class="turinys"><b>Notes</b>:<br>
  1. Ctrl means hold down the Ctrl key.<br>
  2. Shift means hold down the Shift key.</p>

  <p class="turinys">More information about program <b>screen(1)</b> can be found on screen man pages.</p>

  <p class="turinys">Below you can watch video about how to use emulator screen.</p>

  <p class="turinys">
  <video controls>
  <source src="/media/screen-manager-screen.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  </p>

  <p><b>References</b></p>
  <p class="turinys">1. October 04, 2018. Screen User’s Manual. Nuoroda: <a target="_blank" href="https://www.gnu.org/software/screen/manual/screen.html">https://www.gnu.org/software/screen/manual/screen.html</a></p>

  <hr class="pavadinimas">

  <p><span id="basic-programs" class="pavadinimas">5. Basic programs</span></p>
  <p class="turinys">In the Peropesis Linux file system programs are located in <i>/bin</i>, <i>/sbin</i>, <i>/usr/bin</i> and <i>/usr/sbin</i> directories. In order to get to know these programs and then use them, before that, it is necessary to get to know some of the main commands of programs.</p>

  <p class="turinys">Because the Peropesis operating system is minimalist, a command-line-based system, all programs on this system are accessed through a command-line interface. Immediately after the Peropesis OS has been loaded in the computer's RAM and the system has been accessed on behalf of a root user, all programs can be called by specifying their names/commands in the command prompt.</p>

  <hr class="pavadinimas">

  <p><span id="program-pwd" class="pavadinimas">5.1 Program pwd</span></p>
  <p class="turinys">Program <b>pwd</b> prints working directory or otherwise specifies which system directory you are in as a user.</p>

  <p class="kodas"><samp>$</samp> <kbd>pwd</kbd><br>
  /root</p>

  <hr class="pavadinimas">

  <p><span id="program-cd" class="pavadinimas">5.2 Program cd</span></p>
  <p class="turinys">Program <b>cd</b> changes directory. For example, to access the root directory of a system, you would type the following command at a command prompt:</p>

  <p class="kodas"><samp>$</samp> <kbd>cd /</kbd></p>

  <p class="turinys">Conversely, to return to your /root user directory, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>$</samp> <kbd>cd /root</kbd></p>

  <hr class="pavadinimas">

  <p><span id="program-ls" class="pavadinimas">5.3 Program ls</span></p>
  <p class="turinys">Program <b>ls</b> (abbreviation for list) lists the files and directories in the specified directory. If you want to know which files or directories exist, for example, in the main system directory, you would type the following command at the command prompt:</p>

  <p class="kodas"><samp>$</samp> <kbd>ls /</kbd></p>

  <p class="turinys">By using the <b>ls</b> command, you can find out what sharing programs make up the Peropesis operating system. Examples:</p>

  <p class="kodas"><samp>$</samp> <kbd>ls /bin</kbd><br>
  <samp>$</samp> <kbd>ls /sbin</kbd><br>
  <samp>$</samp> <kbd>ls /usr/bin</kbd><br>
  <samp>$</samp> <kbd>ls /usr/sbin</kbd></p>

  <p class="turinys">You can use the Peropesis man pages in order to know exactly, what each programs is for and how to use these programs. For more information about the man program, see the <a href="#help-program-man">Help</a> chapter below.</p>

  <hr class="pavadinimas">

  <p><span id="program-s-nail-email-client" class="pavadinimas">5.4 S-nail email client</span></p>

  <p class="turinys"><b>S-nail</b> is command-line-based email client for both send and receive e-mail. This chapter provides information about how to use this client for receiving and sending e-mail messages by using external <i>SMTP</i> and <i>IMAP</i> (<i>Gmail</i> in this case) servers in the Peropesis Linux OS.</p>

  <p class="turinys"><b>Note</b>. Because the <i>Message transfer agent (MTA)</i> is not installed in the Peropesis distribution, the <b>S-nail</b> email client can only work with external <i>SMTP</i> and <i>IMAP</i> servers.</p>


  <p><span class="pavadinimas">Gmail secure settings for external e-mail programs</span></p>

  <p class="turinys">Some free email service providers classify email programs as safe and less safe. The Gmail email service <b>S-nail</b> assigns to less secure and blocks connections to <i>SMTP</i> and <i>IMAP</i> servers by default. In order to be able to connect to these servers with the <b>S-nail</b> program you need to use a 16-digit App password, which can be generated after activating the "2-Step Verification" option in the Gmail security settings. More information about the Gmail <i>SMTP</i>, <i>IMAP</i>, and security options are discussed in sources <a target="_blank" href="https://support.google.com/mail/answer/7126229?p=BadCredentials&visit_id=637796467131969141-139578350&rd=2">Check Gmail through other email platforms</a> and <a target="_blank" href="https://support.google.com/accounts/answer/185833">Sign in with App Passwords</a>.</p>
  
  <p><span class="pavadinimas">Example of ~/.mailrc settings</span></p>

  <p class="turinys">In the user's home directory in the <i>~/. mailrc</i> file is defined <b>S-nail</b> program options. This file with some options has already been created in the Peropesis system. Settings can be changed as required. If the system user plans to use the <i>Gmail</i> mail service, need to change the <i>Gmail</i> user login and password in this file. Below are examples of how to do this with the text editor, <b>ed</b>.</p>

  <p class="turinys">To print the contents of a <i>.mailrc</i> file on the screen, type the following command:</p>

  <p class="kodas"><samp>$</samp> <kbd>cat -n .mailrc | more</kbd><br>
  1 # S-nail setting for Gmail<br>
  2 # Before use change "USER" and "PASS" settings for the IMAP and SMTP servers,<br>
  3 # also change "set from="Your Name &lt;username@gmail.com&gt;"" setting.<br>
  4<br>
  5 # v15.0 compatibility mode<br>
  6 set v15-compat<br>
  7<br>
  8 # Essential setting: select allowed character sets<br>
  9 set sendcharsets=utf-8,iso-8859-1<br>
  10<br>
  11 # A very kind option: when replying to a message, first try to<br>
  12 # use the same encoding that the original poster used herself!<br>
  13 set reply-in-same-charset<br>
  14<br>
  15 # Due to historical reasons comments and name parts of email addresses are removed by<br>
  16 # default when sending mail, replying to or forwarding a message. If this variable is set<br>
  17 # such stripping is not performed.<br>
  18 set fullnames<br>
  19<br>
  20 # If set, S-nail asks an interactive user for files to attach at the end of each message;<br>
  21 # An empty line finalizes the list.<br>
  22 set askattach<br>
  23<br>
  24 # When a message is replied to and this variable is set, it is marked as having been answered.<br>
  25 set markanswered<br>
  26<br>
  27 # Controls whether a ‘Reply-To:’ header is honoured when replying to a message via reply or Lreply.<br>
  28 # This is a quadoption; if set without a value it defaults to ‘‘yes’’.<br>
  29 set reply-to-honour=ask-yes<br>
  30<br>
  31 # If this variable is set then the editor is started automatically<br>
  32 # when a message is composed in interactive mode.<br>
  33 set editalong<br>
  34<br>
  35 # Sort mail by date<br>
  36 set autosort=date<br>
  37<br>
  38 # Request strict TLS transport layer security checks<br>
  39 set tls-verify=strict<br>
  40 set tls-ca-file=/etc/ssl/ca-bundle.crt<br>
  41 set tls-ca-no-defaults<br>
  42<br>
  43 account "personal" {<br>
  44<br>
  45 localopts yes<br>
  46<br>
  47 set from="Your Name &lt;username@gmail.com&gt;"<br>
  48<br>
  49 set record=Sent<br>
  50 set inbox=+Inbox<br>
  51<br>
  52 set folder=imaps://USER:PASS@imap.gmail.com:993<br>
  53<br>
  54 set mta=smtps://USER:PASS@smtp.gmail.com:465<br>
  55<br>
  56 }<br>
  57<br>
  58 # Enable account on startup<br>
  59 account personal
  </p>

  <p class="turinys">The example shows that row 52 of the .mailrc file contains the <i>IMAP</i> server login data and row 54 contains the <i>SMTP</i> server login data. Change this data. In the example, this task is accomplished with a text editor <b>ed</b>:</p>

  <p class="kodas"><samp>$</samp> <kbd>ed .mailrc</kbd><br>
  1884<br>
  54<br>
  set mta=smtps://USER:PASS@smtp.gmail.com:465<br>
  c<br>
  set mta=smtps://new-USER:new-PASS@smtp.gmail.com:465<br>
  .<br>
  w<br>
  1884<br>
  q</p>

  <p class="turinys">Explanation of the commands used in the example: command "<b>ed .mailrc</b>" opens a file; command <b>"54"</b> prints the contents of row 54; command "<b>c</b>" means change (change content); entering new content; placing a dot :); enter a command "<b>w</b>" that means write (write content); command "<b>q</b>" means quit. The same steps are performed for row 52.</p>

  <p class="turinys">Learn more about the <b>ed</b> program and its options on the <b>ed(1)</b> man pages. For more information about <i>.mailrc</i> options, see <b>s-nail(1)</b> man pages or the official <b>S-nail</b> website: <a target="_blank" href="https://www.sdaoden.eu/code-nail.html">sdaoden.eu/code-nail.html</a>. A useful example of a. mailrc configuration <a target="_blank" href="https://icyphox.sh/blog/s-nail/">here</a>.</p>

  <p class="turinys"><b>Note</b>. If another mail service is being used, it is necessary to change the <b>IMAP</b> and <b>SMTP</b> server addresses.</p>

  <p><span class="pavadinimas">Basic S-nail commands</span></p>

  <p class="turinys">Send a message at a command prompt:</p>

  <p class="kodas"><samp>$</samp> <kbd>echo "Body of the message" | s-nail -s "Subject" email@address.domain</kbd>
  </p>

  <p class="turinys">More about <b>S-nail</b> client command type <b>help</b>. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>s-nail</kbd><br>
  ?<br>
  help<br>
  [...]
  </p>

  <p><b>References</b></p>

  <p class="turinys">1. A group of authors. (2020/04/26). Mail manual. Link: <a target="_blank" href="https://www.sdaoden.eu/code-nail.html">https://www.sdaoden.eu/code-nail.html</a><br>
  2. Anirudh Oppiliappan. (2020/06/20). The S-nail mail client. Link: <a target="_blank" href="https://icyphox.sh/blog/s-nail/">https://icyphox.sh/blog/s-nail/</a></p>

  <hr class="pavadinimas">

  <p><span id="help" class="pavadinimas">6. Help</span></p>

  <p class="turinys">The following forms of help are available on the Peropesis Linux operating system.<br>
  1. Program option <i>--help</i>.<br>
  2. <i>man pages</i> of programs.<br>
  For more information about these support forms, see the following chapters.</p>

  <hr class="pavadinimas">

  <p><span id="program-option-help" class="pavadinimas">6.1 Program option --help</span></p>

  <p class="turinys">The vast majority of compiled and in the Peropesis distribution distributed programs can be executed with the <i>--help</i> option. The program executed with this option prints the instruction manual for the program on the screen. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>uname --help</kbd><br>
  Usage: uname [OPTION]...<br>
  Print certain system information.  With no OPTION, same as -s.<br><br>

  -a, --all                print all information, in the following order,<br>
                             except omit -p and -i if unknown:<br>
  -s, --kernel-name        print the kernel name<br>
  -n, --nodename           print the network node hostname<br>
  -r, --kernel-release     print the kernel release<br>
  -v, --kernel-version     print the kernel version<br>
  -m, --machine            print the machine hardware name<br>
  -p, --processor          print the processor type (non-portable)<br>
  -i, --hardware-platform  print the hardware platform (non-portable)<br>
  -o, --operating-system   print the operating system<br>
      --help        display this help and exit<br>
      --version     output version information and exit<br>

  GNU coreutils online help: &lt;https://www.gnu.org/software/coreutils/&gt;<br>
  Full documentation &lt;https://www.gnu.org/software/coreutils/uname&gt;<br>
  or available locally via: info '(coreutils) uname invocation'</p>

  <p class="turinys">The result in the example shows that the <b>uname</b> program can be executed, for example, with the <i>-a</i> option. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>uname -a</kbd><br>
  Linux peropesis 6.0.2 #1 SMP PREEMPT_DYNAMIC Thu Oct 20 08:26:47 EEST 2022 x86_64 GNU/Linux</p>

  <hr class="pavadinimas">

  <p><span id="program-man" class="pavadinimas">6.2 Program man</span></p>

  <p class="turinys">The <b>man</b> program is the traditional form of documentation for Unix-like operating systems. The word man is an abbreviation for the english word manual. man pages of programs, which include specially formatted files, are written for the vast majority of programs. Running the command "man program-name" on the command-line displays the man page of the defined program. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>man pwd</kbd></p>

  <p class="turinys">Individual man pages of programs are divided into sections for convenience. In practice, there may be specified a number next to the program name that identifies the man section to which the program is assigned. For example, when reading various educational materials, a link to the <b>bash(1)</b> man page can be seen. This mark indicates that the man page of bash program is assigned to chapter 1, common programs. If necessary, you can specify the type of documentation you need for the man program. For example, if you need the ncurses man page for Chapter 3 (theme: libraries), you would enter the following query on the command line:</p>

  <p class="kodas"><samp>$</samp> <kbd>man 3 ncurses</kbd></p>

  <p class="turinys"><b>The section numbers of the manual:</b></p>

  <table style="margin-bottom: 20px; width:100%;">
  <tr><td style="width:15%;"><b>Section</b></td><td style="width:85%;"><b>Type of documentation</b></td></tr>
  <tr><td style="width:15%;">1</td><td style="width:85%;">Executable programs or shell commands</td></tr>
  <tr><td style="width:15%;">2</td><td style="width:85%;">System calls (functions provided by the kernel)</td></tr>
  <tr><td style="width:15%;">3</td><td style="width:85%;">Library calls (functions within program libraries)</td></tr>
  <tr><td style="width:15%;">4</td><td style="width:85%;">Special files (usually found in /dev)</td></tr>
  <tr><td style="width:15%;">5</td><td style="width:85%;">File formats and conventions, e.g. /etc/passwd</td></tr>
  <tr><td style="width:15%;">6</td><td style="width:85%;">Games</td></tr>
  <tr><td style="width:15%;">7</td><td style="width:85%;">Miscellaneous (including macro packages and conventions)</td></tr>
  <tr><td style="width:15%;">8</td><td style="width:85%;">System administration commands (usually only for root)</td></tr>
  <tr><td style="width:15%;">9</td><td style="width:85%;">Kernel routines</td></tr>
  </table>

  <p class="turinys">In the Peropesis operating system, programs such as <b>whatis</b> and <b>apropos</b> are available in addition to man program. These programs are an integral part of the man software package and these programs are designed to make searching in the man database easier.</p>

  <p class="turinys">The <b>whatis</b> program provides a very brief description of the programs available on the system. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>whatis bash</kbd><br>
  bash (1) - GNU Bourne-Again SHell</p>

  <p class="turinys">The <b>apropos</b> program is used when you want to find man pages that mention your given keyword. This is especially useful when searching for programs when the exact name of the program is unknown. For example:</p>

  <p class="kodas"><samp>$</samp> <kbd>apropos bash</kbd><br>
  bash (1)             - GNU Bourne-Again SHell<br>
  builtins (1)         - bash built-in commands, see bash(1)<br>
  rbash (1)            - restricted bash, see bash(1)WaveLAN/IEEE 802.11 device driver</p>

  <p class="turinys"><b>Note</b>. If you want to use the <b>whatis</b> and <b>apropos</b> programs in the Peropesis system, it is first of all necessary to create or update the man database. This can be done by typing the following command at the command line:</p>

  <p class="kodas"><samp>$</samp> <kbd>mandb</kbd><br></p>

  <p class="turinys">More information about <b>man(1)</b>, <b>whatis(1)</b> and <b>apropos(1)</b> programs can be found on the man pages of these programs.</p>

  <p><b>References</b></p>

  <p class="turinys">1. A group of authors. man page. Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Man_page">https://en.wikipedia.org/wiki/Man_page</a><br>
  2. Machtelt Garrels. (2003). Getting help. Link: <a target="_blank" href="https://tldp.org/LDP/intro-linux/html/sect_02_03.html">https://tldp.org/LDP/intro-linux/html/sect_02_03.html</a></p>

  <hr class="pavadinimas">

  <p><span id="file-system" class="pavadinimas">7. File system</span></p>

  <p class="turinys">The Linux file system contains a single main directory. This main directory is called root directory. root directory in the system is represented by a slash (/). Each directory in the root directory is called a subdirectory. Linux file system can be imagined as a file directive tree - root directory with several subdirectories branching from it and also hundreds if not thousands other other directories and files branching from these subdirectories. The development of the Linux file system is based on <a target="_blank" href="https://refspecs.linuxfoundation.org/fhs.shtml">general filesystem hierarchy standards</a>.</p>

  <hr class="pavadinimas">

  <p><span id="layout-of-the-Peropesis-file-system" class="pavadinimas">7.1 Layout of the Peropesis file system</span></p>

  <p class="turinys">The development of the Peropesis Linux file system is based on general filesystem hierarchy standard. The main root directory (/) contains the following directories:</p>

  <table style="margin-bottom: 20px; width:100%;">
  <tr><td style="width:15%;"><b>Directory</b></td><td style="width:85%;"><b>Purpose</b></td></tr>
  <tr><td style="width:15%;"><kbd>/bin</kbd></td><td style="width:85%;">Directory for storing core programs.</td></tr>
  <tr><td style="width:15%;"><kbd>/boot</kbd></td><td style="width:85%;">Directory for storing required files on Linux boot, including Linux core image and initrd file system image.</td></tr>
  <tr><td style="width:15%;"><kbd>/dev</kbd></td><td style="width:85%;">Directory for storage of device nodes / files.</td></tr>
  <tr><td style="width:15%;"><kbd>/etc</kbd></td><td style="width:85%;">Directory for storing configuration files.</td></tr>
  <tr><td style="width:15%;"><kbd>/home</kbd></td><td style="width:85%;">Directory for storing for system users' home directories.</td></tr>
  <tr><td style="width:15%;"><kbd>/lib</kbd></td><td style="width:85%;">Directory for storing programs libraries.</td></tr>
  <tr><td style="width:15%;"><kbd>/lib64</kbd></td><td style="width:85%;">Directory for storing programs libraries, that support 64-bit software.</td></tr>
  <tr><td style="width:15%;"><kbd>/media</kbd></td><td style="width:85%;">Directory for storage of mounted media (floppy, cdrom, etc.).</td></tr>
  <tr><td style="width:15%;"><kbd>/mnt</kbd></td><td style="width:85%;">Directory for storing temporarily installed devices (e.g. USB).</td></tr>
  <tr><td style="width:15%;"><kbd>/opt</kbd></td><td style="width:85%;">Directory for storing second-tier software packages installed by system users.</td></tr>
  <tr><td style="width:15%;"><kbd>/proc</kbd></td><td style="width:85%;">A virtual file system stores information about kernel-controlled processes.</td></tr>
  <tr><td style="width:15%;"><kbd>/root</kbd></td><td style="width:85%;">Home directory for user root</td></tr>
  <tr><td style="width:15%;"><kbd>/run</kbd></td><td style="width:85%;">This directory stores information about users, that are currently logged on and running daemons.</td></tr>
  <tr><td style="width:15%;"><kbd>/sbin</kbd></td><td style="width:85%;">Directory for storing core programs.</td></tr>
  <tr><td style="width:15%;"><kbd>/sys</kbd></td><td style="width:85%;">This directory stores data about devices and some of the functions performed by the kernel.</td></tr>
  <tr><td style="width:15%;"><kbd>/tmp</kbd></td><td style="width:85%;">Directory for storing temporary files.</td></tr>
  <tr><td style="width:15%;"><kbd>/usr</kbd></td><td style="width:85%;">Second basic part of file system.</td></tr>
  <tr><td style="width:15%;"><kbd>/var</kbd></td><td style="width:85%;">The storage directory for files that contain variable content (for example, system logs).</td></tr>
  </table>

  <p><b>References</b></p>

  <p class="turinys">1. A group of authors. Filesystem Hierarchy Standard. Link: <a target="_blank" href="https://refspecs.linuxfoundation.org/fhs.shtml">https://refspecs.linuxfoundation.org/fhs.shtml</a></p>

  <hr class="pavadinimas">

  <p><span id="searching-for-files" class="pavadinimas">7.2 Searching for files</span></p>

  <p class="turinys">Different programs can be used to search for files in the Peropesis root file system. Program <b>whereis</b> is used when searching for binary files (programs) or these programs <b>man</b> pages in a file system: Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>whereis bash</kbd><br>
  bash: /bin/bash /usr/share/man/man1/bash1</p>

  <p class="turinys">Program <b>find</b> can be used to search for files and directories or is used to further interact with the files or directories you have found. With <b>find</b> program options files and directories can be searched using the following criteria: by file name, creation date, expected location on file system, file owner, etc. Below is an example of searching for <b>hostname</b> on the entire root file system:</p>

  <p class="kodas"><samp>$</samp> <kbd>find / -name hostname</kbd><br>
  /etc/hostname<br>
  /etc/init.d/hostname<br>
  /proc/sys/kernel/hostname<br>
  /bin/hostname</p>

  <p class="turinys">Other Linux commands can also be executed in parallel with the <b>find</b> command. Below is an example of finding and deleting the file named <i>core</i>:</p>

  <p class="kodas"><samp>$</samp> <kbd>find /tmp -name core -type f -print | xargs /bin/rm -f</kbd></p>

  <p class="turinys">Another search program, <b>locate</b>, is used to find files by name. This program runs faster than <b>find</b>, because it looks for files in a pre-built database instead of the entire file system. The latest Peropesis release does not have a pre-installed file database, so it must be created before using program <b>locate</b>. Example of creating a file database:</p>

  <p class="kodas"><samp>$</samp> <kbd>updatedb</kbd></p>

  <p class="turinys">Example of the file <b>whereis</b> search:</p>

  <p class="kodas"><samp>$</samp> <kbd>locate whereis</kbd><br>
  /usr/bin/whereis<br>
  /usr/share/man/man1/whereis.1</p>

  <p class="turinys">For more information about <b>whereis (1)</b>, <b>find (1)</b>, <b>updatedb (8)</b> and <b>locate (1)</b> programs, see the man pages of these programs.</p>

  <hr class="pavadinimas">

  <p><span id="installing-temporary-devices-in-the-/mnt-directory" class="pavadinimas">7.3 Installing temporary devices in the /mnt directory</span></p>

  <p class="turinys">The Peropesis operating system has the <b>eudev</b> software package installed. When a temporary device is plugged into any of the jacks on your computer, in <i>/dev</i> directory by <b>eudev</b> a node for that device is automatically created, expressed as a file name. USB devices connected to your computer are labeled with the <i>sdx</i> file name in the system. The letter x is a variable data. The first connected device is labeled with the <i>sda</i> name, the second <i>sdb</i>, etc.</p>

  <p class="turinys">You can use the lsblk program to check out whether USB devices are connected to your computer. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>lsblk</kbd><br>
  NAME   MAJ:MIN RM  SIZE RO TYPE MOUNTPOINT<br>
  sda      8:16   1 14.4G  0 disk<br>
  sr0     11:0    1 1024M  0 rom</p>

  <p class="turinys">The example shows, that a USB device, <i>sda</i> is connected to the system. so that we can scan from this device and record to it information, this device must be mounted in the Peropesis file system. A <i>/mnt</i> directory is used to mount temporary devices into the system. For installation of the device is used a <b>mount</b> program. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>mount /dev/sda /mnt</kbd></p>

  <p class="turinys">We can use the <b>ls</b> command to scan information from a device <i>sda</i>, that is currently mounted into the <i>/mnt</i> directory:</p>

  <p class="kodas"><samp>$</samp> <kbd>ls /mnt</kbd><br>
  file1 file2 directory1/  directory2/</p>

  <p class="turinys">The example shows, that sda device has two files (<i>file1</i> and <i>file2</i>) and two directories (<i>directory1/</i> and <i>directory2/</i>). With other programs can create an additional file on this device, also the file, that is on the sda device can be saved to other Peropesis file system directories or a file that is on a Peropesis file system can be copied to a USB device.</p>

  <p class="turinys">The <b>umount</b> program is used for unmounting a device from the Peropesis file system. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>umount /mnt</kbd></p>

  <hr class="pavadinimas">

  <p><span id="to-recover-a-faulty-linux-operating-system-by-using-the-chroot" class="pavadinimas">7.4 To recover a faulty Linux operating system by using the chroot</span></p>

  <p class="turinys">Live edition of the Peropesis operating system can be used for recovering working option of other, faulty operating system - by loading Peropesis system in the computer's memory, by mounting the current faulty system which is on the hard drive to Peropesis and by using the <b>chroot</b> Program for restoring corrupted libraries or other essential files.</p>

  <p class="turinys"><b>Chroot</b> program executes commands in a directory to which root authority is assigned. On many systems, only the super-user can do this. When, for some reason, such as, incorrect libraries are installed, normally the operating system stops booting, by mounting this corrupted system into another file system and by using the <b>chroot</b> program, then come up an possibility to modify information on a corrupted file system, in directories such as <i>/lib64</i> or <i>/sbin</i>, this allows you to restore what has been damaged.</p>

  <p class="turinys">The following is a 4-step action plan, how to connect to a damaged file system by using the <b>chroot</b> program.</p>

  <p class="turinys">1. In the first step live edition of the Peropesis OS need to write to USB storage. Instructions on how to do this are provided in <a href="#saving-peropesis-live-iso-image-to-usb-drive-in-Linux-environment">this chapter</a>.<br>
  2. In the second step the Peropesis live OS, which is written to media need to load to computer, that has a damaged operating system, memory. Instructions on how to do this are provided in <a href="#peropesis-live-booting-from-usb-stick">this chapter</a>.<br>
  3. In the third step a faulty file system need to mount into the Peropesis file system. Usually, the Linux operating system, that is installed on your computer's disk has at least two partitions - swap and Linux. In the system, these partitions can be represented by <i>sda1</i> and <i>sda2</i> file names (file names also can be <i>sdb, sdc</i>, etc.). Only one of the following partitions should be installed in the Peropesis system, i.e. a partition containing Linux (not swap) file system. Partition type can be obtained from <b>lsblk</b> program. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>lsblk</kbd><br>
  NAME MAJ:MIN RM SIZE RO TYPE MOUNTPOINT<br>
  sda      8:0    0 500G   0 disk<br>
├─sda1   8:1    0 498.5G 0 part /<br>
└─sda2   8:2    0  1.5G  0 part [SWAP]<br><br>
  <samp>#</samp> <kbd>mount /dev/sda2 /mnt</kbd></p>

  <p class="turinys">4. After the faulty file system has been mounted to the Peropesis file system <i>/mnt</i> directory, the <b>chroot</b> command can be executed. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>chroot /mnt /bin/bash</kbd></p>

  <p class="turinys">After this command, the <b>chroot</b> program changes the main file system root directory into a new root directory and from then on, in subdirectories is opportunity to perform the desired actions. More information about <b>chroot</b> program options can be found on the <b>chroot (1)</b> man page.</p>

  <p class="turinys"><b>exit</b> command used to exit from chroot environment after actions is finished. Finally, the file system is unmounted from the <i>/mnt</i> subdirectory of the Peropesis file system. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>exit</kbd><br><br>
  <samp>#</samp> <kbd>umount /mnt</kbd></p>

  <p><b>References</b></p>

  <p class="turinys">1. A group of authors. Run a command with a different root directory. Link: <a target="_blank" href="https://www.gnu.org/software/coreutils/manual/html_node/chroot-invocation.html#chroot-invocation">https://www.gnu.org/software/coreutils/manual/html_node/chroot-invocation.html#chroot-invocation</a><br>
  2. A group of authors. Chroot. Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Chroot">https://en.wikipedia.org/wiki/Chroot</a></p>

  <hr class="pavadinimas">

  <p><span id="network" class="pavadinimas">8. Network</span></p>

  <p class="turinys">Peropesis supports two types of network connectivity, wired and wireless. This chapter describes how by using the Peropesis operating system to connect to a network in both of the following ways.</p>

  <hr class="pavadinimas">

  <p><span id="wired-(ethernet)-connection" class="pavadinimas">8.1 Wired (ethernet) connection</span></p>

  <p class="turinys">Program <b>dhcpcd</b> is installed in the Peropesis operating system. <b>dhcpcd</b> is a <b>DHCP</b> protocol client. <b>DHCP</b> - dynamic host configuration protocol, is a way to assign an IP address to a computer at startup. Client <b>dhcpcd</b> take an information (IP address, routes, and so on) from server <b>dhcpd</b> and automatically configures the network interface on the computer where it is installed and running. The program <b>dhcpcd</b> is initiated during the Peropesis system boot. The initialization script is described in the <i>/etc/init.d/network</i> file. This script contains two functions for creating and deleting loopback and ethernet interfaces. This script also includes <i>"case"</i> control construct of these functions. To sum up, when you type a commands: <i>/etc/init.d/network start</i> | <i>stop</i> | <i>restart</i> at a command line, then loopback and network (ethernet) interfaces are run, stoped or rebooted. For example:</p>

  <p class="turinys">If you want to create loopback and ethernet interfaces, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>/etc/init.d/network start</kbd></p>

  <p class="turinys">If you want to stop loopback and ethernet interfaces, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>/etc/init.d/network stop</kbd></p>

  <p class="turinys">If you want to stop and then immediately to re-create loopback and ethernet interfaces, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>/etc/init.d/network restart</kbd></p>

  <p class="turinys">For more information about the <b>dhcpcd (8)</b> program, see on this program's man page.</p>

  <p class="turinys">In the system is installed <b>ifconfig</b> and <b>route</b> network configuration and control programs. Program <b>ifconfig</b> shows network interfaces in the system and it is designed to configure these interfaces. Program <b>route</b> show / manipulates the kernel's IP routing tables. For example:</p>

  <p class="turinys">If you want to get information about the network interfaces that are available on your system, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>ifconfig -a</kbd></p>

  <p class="turinys">If you want to get information about existing routes in the system, you must type the following command at the command prompt:</p>

  <p class="kodas"><samp>#</samp> <kbd>route</kbd></p>

  <p class="turinys">For more information about <b>ifconfig (8)</b> and <b>route (8)</b> programs, see on these program's man pages.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Roy Marples. dhcpcd. Link: <a target="_blank" href="https://roy.marples.name/projects/dhcpcd">https://roy.marples.name/projects/dhcpcd</a><br>
  2. A group of authors. Interface Configuration for IP. Link: <a target="_blank" href="http://www.faqs.org/docs/linux_network/x-087-2-iface.interface.html">http://www.faqs.org/docs/linux_network/x-087-2-iface.interface.html</a></p>

<!-- -->
  <hr class="pavadinimas">

  <p><span id="wireless-connection" class="pavadinimas">8.2 Wireless connection</span></p>

  <p class="turinys">This section describes how to connect to wireless network access point.</p>

  <p class="turinys">1. The first step involves checking if a wireless network interface has been established in the loaded Peropesis system. This can be done by writing the following command on the command line:</p>

  <p class="kodas"><samp>#</samp> <kbd>ifconfig -a</kbd></p>

  <p class="turinys">2. A list of available wireless access point can be found by using this command:</p>

  <p class="kodas"><samp>#</samp> <kbd>iw dev interface scan | grep SSID</kbd></p>

  <p class="turinys">3. The following command is used to check interface status:</p>

  <p class="kodas"><samp>#</samp> <kbd>iw dev interface link</kbd></p>

  <p class="turinys">4. If your device is not connected to an access point and, if wireless network access point is not password protected, the command below is used to connect to it:</p>

  <p class="kodas"><samp>#</samp> <kbd>iw interface connect SSID</kbd></p>

  <p class="turinys">5. If wireless network access point is password protected (WPA or WPA2), <b>wpa_supplicant</b> and <b>wpa_passphrase</b> programs are used to control the wireless network auto authentication process. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>wpa_supplicant -B -i interface -c &lt;(wpa_passphrase MYSSID PASS)</kbd></p>

  <p class="turinys">Or other way:</p>

  <p class="kodas"><samp>#</samp> <kbd>wpa_passphrase MYSSID PASS | cat > /etc/wpa_supplicant.conf</kbd><br>

  <samp>#</samp> <kbd>wpa_supplicant -B -i interface -c /etc/wpa_supplicant.conf</kbd></p>

  <p class="turinys">6. <b>dhcpcd</b> program will configure wireless network interface data automatically.</p>

  <p class="turinys">7. To connect to hidden wireless network access point, you need to create a configuration file <i>/etc/wpa_supplicant.conf</i> with the content in the example:</p>

  <p class="kodas"><samp>#</samp> <kbd>cat &gt; /etc/wpa_supplicant.conf &lt;&lt; "EOF"</kbd><br>
  network={<br>
  ssid="SSID_name"<br>
  scan_ssid=1<br>
  psk="Password"<br>
  }<br>
  EOF</p>

  <p class="turinys">The <b>wpa_supplicant</b> program is used to start the auto identification process. The <b>wpa_supplicant</b> program must be instructed to retrieve login data from a previously created file. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>wpa_supplicant -B -i interface -c /etc/wpa_supplicant.conf</kbd></p>
 
  <p class="turinys">For more information about <b>iw (8)</b>, <b>wpa_supplicant (8)</b> and <b>wpa_passphrase (8)</b> programs, see on these program's man pages.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Paul Michel (2019/06/18). About iw. Link: <a target="_blank" href="https://wireless.wiki.kernel.org/en/users/Documentation/iw">https://wireless.wiki.kernel.org/en/users/Documentation/iw</a><br>
  2. Johannes Berg (2019/05/28). About nl80211. Link: <a target="_blank" href="https://wireless.wiki.kernel.org/en/developers/documentation/nl80211">https://wireless.wiki.kernel.org/en/developers/documentation/nl80211</a></p>

  <hr class="pavadinimas">

  <p><span id="language-characters-display-keyboard" class="pavadinimas">9. Language, characters, display, keyboard</span></p>

  <p><span id="locale" class="pavadinimas">9.1 locale</span></p>

  <p class="turinys">The software distributed in the Peropesis Linux operating system has the ability to be customized for the system user living in a specific region, defining the system language, region, currency, time and other special settings that the system user wants to see in his interface. The system responsible for managing the language options and regional features of the software in the Peropesis distribution is called a locale.</p>

  <p class="turinys">By default, the United States locale is selected in the Peropesis system. In the system, this locale is defined in <i>en_US.UTF-8</i> format, where '<i>en</i>' represents language, '<i>US</i>' represents territory, and '<i>UTF-8</i>' represents text encoding standard. If you want to check which locale is set in the system during the current session, you need to execute the command <b>locale</b>. Program <b>locale</b> is part of the <i>GNU C Library</i> software. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>locale</kbd><br>
  LANG="en_US.UTF-8"<br>
  LC_CTYPE="en_US.UTF-8"<br>
  LC_NUMERIC="en_US.UTF-8"<br>
  LC_TIME="en_US.UTF-8"<br>
  LC_COLLATE="en_US.UTF-8"<br>
  LC_MONETARY="en_US.UTF-8"<br>
  LC_MESSAGES="en_US.UTF-8"<br>
  LC_PAPER="en_US.UTF-8"<br>
  LC_NAME="en_US.UTF-8"<br>
  LC_ADDRESS="en_US.UTF-8"<br>
  LC_TELEPHONE="en_US.UTF-8"<br>
  LC_MEASUREMENT="en_US.UTF-8"<br>
  LC_IDENTIFICATION="en_US.UTF-8"<br>
  LC_ALL="en_US.UTF-8"</p>

  <p class="turinys">The values of the variables in the result are defined by the <i>/etc/profile</i> file. These variable values can be changed at your own discretion. Before changing these values, you must first check which locale frameworks are installed in the filesystem. You can do this by running the locale command with the '<i>--all-locales</i>' option. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>locale -a</kbd><br>
  C<br>
  C.utf8<br>
  en_US.utf8<br>
  POSIX</p>

  <p class="turinys">All locales installed in the Peropesis system are stored in a filesystem <i>/usr/lib/locale</i> directory archive called <i>locale-archive</i>. The result in the example shows that only a few locale choices are installed in the Peropesis filesystem. If you need to set a locale in the system that is not in the list, for example France, this locale can be compiled. Another <i>GNU C Library tool</i>, <b>localedef</b>, is used to install a new locale. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>localedef -i fr_FR -f UTF-8 fr_FR.UTF-8</kbd></p>

  <p class="turinys">To verify that the installation of France locale succeeded, the locale command must be executed again. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>locale -a</kbd><br>
  C<br>
  C.utf8<br>
  en_US.utf8<br>
  fr_FR.utf8<br>
  POSIX</p>

  <p class="turinys">The result in the example shows that an additional <i>fr_FR.UTF-8</i> locale appeared in the list. It is now possible to change the system locale values to new values. If you want to change the values of all locale variables at once, you only need to define the value of one variable 'LC_ALL'. Example:</p>

   <p class="turinys"><b>Note</b>. Before changing the locale values to the values of the newly installed locale, it is necessary to reboot the user session (logout/login). Only this way the newly installed values of the environment variable locale can be loaded.</p>

  <p class="kodas"><samp>$</samp> <kbd>LC_ALL=fr_FR.UTF-8</kbd><br>
  <samp>$</samp> <kbd>export LC_ALL</kbd></p>

  <p class="turinys">If there is a need to set the global system language, for example french, the value of the 'LANG' variable needs to be additionally defined. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>export LANG=fr_FR.UTF-8</kbd></p>

  <p class="turinys">We're checking for new locale values. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>locale</kbd><br>
  LANG="fr_FR.UTF-8"<br>
  LC_CTYPE="fr_FR.UTF-8"<br>
  LC_NUMERIC="fr_FR.UTF-8"<br>
  LC_TIME="fr_FR.UTF-8"<br>
  LC_COLLATE="fr_FR.UTF-8"<br>
  LC_MONETARY="fr_FR.UTF-8"<br>
  LC_MESSAGES="fr_FR.UTF-8"<br>
  LC_PAPER="fr_FR.UTF-8"<br>
  LC_NAME="fr_FR.UTF-8"<br>
  LC_ADDRESS="fr_FR.UTF-8"<br>
  LC_TELEPHONE="fr_FR.UTF-8"<br>
  LC_MEASUREMENT="fr_FR.UTF-8"<br>
  LC_IDENTIFICATION="fr_FR.UTF-8"<br>
  LC_ALL="fr_FR.UTF-8"</p>

  <p class="turinys">After definition of these new variable values, the default location and language for all applications in the system will be french. As a result, if you query '<i>bash --version</i>' on the command line, <b>bash</b> will display french messages to the system user. Program messages written in various languages (between them and french) are stored in the <i>/usr/share/locale</i> directory of the file system. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>bash --version</kbd><br>
  GNU bash, version 5.2.0(1)-release (x86_64-peropesis-linux-gnu)<br>
  Copyright (C) 2022 Free Software Foundation, Inc.<br>
  Licence GPLv3+ : GNU GPL version 3 ou ultérieure &lt;http://gnu.org/licenses/gpl.html&gt;<br><br>
  Ceci est un logiciel libre ; vous être libre de le modifier et de le redistribuer.<br>
  AUCUNE GARANTIE n'est fournie, dans les limites permises par la loi.
  </p>

  <p class="turinys">Note. After defining new locale values, diacritics displayed on the terminal screen may not be displayed correctly. If you want the additional diacritics used in french - à / è / ì / ò / ù to be correctly visible in the displayed text, additionally, you need to set the system font with a suitable character set. How to do this is discussed in the chapter - <a href="#terminal-font">terminal font</a>.</p>

  <p class="turinys">Additional information about localization options in various terminal-based programs can be found at <a target="_blank" href="https://tldp.org/HOWTO/Danish-HOWTO-3.html#apps">this source</a>.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Niels Kristian Bech Jensen (March 2000). Locale support in libc 5.4.x and higher. Link: <a target="_blank" href="https://tldp.org/HOWTO/Danish-HOWTO-5.html">https://tldp.org/HOWTO/Danish-HOWTO-5.html</a><br>
  2. A group of authors (2003-2022). Locale (computer software). Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Locale_(computer_software)">https://en.wikipedia.org/wiki/Locale_(computer_software)</a><br>
  3. A group of authors (2008-2022). Internationalization and localization. Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Internationalization_and_localization">https://en.wikipedia.org/wiki/Internationalization_and_localization</a></p>

  <hr class="pavadinimas">

  <p><span id="terminal-font" class="pavadinimas">9.2 Terminal font</span></p>

  <p class="turinys">In the Peropesis Linux OS, program <b>setfont</b> is used to control screen fonts. Setfont is part of the <a target="_blank" href="http://kbd-project.org/">KBD</a> (Linux keyboard tools) software package. All available KBD fonts in the Peropesis file system are stored in the <i>/usr/share/consolefonts</i> directory. By default <i>LatArCyrHeb-14 -m 8859-1</i> font is set in the Peropesis system. If you want to set a different font, you must run the <b>setfont</b> command at the command prompt. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>setfont LatGrkCyr-8x16 -m 8859-1</kbd></p>

  <p class="turinys">After executing this command, the text font displayed on the screen will be <i>LatGrkCyr</i>, font size - <i>8x16</i>, local character set - <i>ISO 8859-1</i>. For more information about which character set (<i>8859-1</i>, <i>8859-2</i>, <i>8859-3</i>, etc.) should be selected, see article <a target="_blank" href="https://en.wikipedia.org/wiki/ISO/IEC_8859">ISO/IEC 8859</a>.

  <p class="turinys">If there is a need to return to the default system font, the setfont command must be executed again in the terminal without any additional options. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>setfont</kbd></p>

  <p class="turinys">More information about <b>setfont(8)</b> can be found on the <b>man</b> page of this program.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Andries Brouwer (2002-10-12). Console generalities. Link: <a target="_blank" href="http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-3.html">http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-3.html</a><br>
  2. A group of authors (2001-2022). ISO/IEC 8859. Link: <a target="_blank" href="https://en.wikipedia.org/wiki/ISO/IEC_8859">https://en.wikipedia.org/wiki/ISO/IEC_8859</a></p>

  <hr class="pavadinimas">

  <p><span id="keyboard-map" class="pavadinimas">9.3 Keyboard map</span></p>

  <p class="turinys">In the Peropesis Linux OS, the <b>loadkeys</b> program is used to manage the keyboard maps. Loadkeys is part of the <a target="_blank" href="http://kbd-project.org/">KBD</a> (Linux keyboard tools) software package. All available KBD keyboard maps in the Peropesis file system are stored in the <i>/usr/share/keymaps</i> directory. If necessary, <b>loadkeys</b> program is used to load the desired keyboard map. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>loadkeys de-mobii</kbd></p>

  <p class="turinys">After executing this command, a map of the <i>de-mobii</i> keyboard is being loaded. This map enables you to enter diacritics such as ä / ß / ö / ü into the system using the keyboard. To switch the keyboard map back to the default kernel keymap on the terminal, the <b>loadkeys</b> command must be reexecuted with the <i>-d</i> option. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>loadkeys -d</kbd></p>

  <p class="turinys">More information about <b>loadkeys(1)</b> can be found on the <b>man</b> page of this program.</p>

  <p><b>References</b></p>

  <p class="turinys">1. Andries Brouwer (2002-10-12). Keyboard generalities. Link: <a target="_blank" href="http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-2.html">http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-2.html</a><br>
  2. Andries Brouwer (2002-10-12). Resetting your terminal. Link: <a target="_blank" href="http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-4.html">http://kbd-project.org/docs/howto-linux-keyboard-and-console/kbd-4.html</a></p>

  <hr class="pavadinimas">

  <p><span id="installing-new-software" class="pavadinimas">10. Installing new software</span></p>

  <p class="turinys">This chapter contains instructions for installing new software on the Peropesis root file system from the source code. These general instructions can be used to install all software that accords <a target="_blank" href="https://www.gnu.org/savannah-checkouts/gnu/automake/manual/automake.html#GNU-Build-System">GNU Build System</a> standards.</p>

  <p class="turinys">Basic instruction. You need:<br>
  1. To download software that is prepared in source code format.<br>
  2. To extract downloaded archive using archiver <b>tar</b> and compressors <b>xz</b>, <b>gzip</b>, <b>bzip2</b>, <b>lzip</b> or <b>zstd</b>.<br>
  3. To enter to the directory, which contains the extracted software source code.<br>
  4. To call the shell script named <b>./configure</b>. The script will perform the tasks of making the compiled software compatible with your system.<br>
  5. To compile the software using <b>make</b>, a program that manages the automatic compilation process.<br>
  6. To install the compiled software to the Peropesis file system using the <b>make install</b> command.
  </p>

  <p class="turinys">Basic instruction in brief:</p>

  <p class="kodas"><samp>$</samp> <kbd>wget https://.../software.tar.gz</kbd><br>
  <samp>$</samp> <kbd>tar -xvf software.tar.gz</kbd><br>
  <samp>$</samp> <kbd>cd software</kbd><br>
  <samp>$</samp> <kbd>./configure</kbd><br>
  <samp>$</samp> <kbd>make</kbd><br>
  <samp>#</samp> <kbd>make install</kbd>
  </p>

  <p class="turinys">The following is a basic example of installing the <a target="_blank" href="https://curl.se/">curl</a> software. Program <b>curl</b> is used in command lines or scripts to transfer data.</p>

  <p class="turinys">You need to download curl. The latest release of curl can be checked <a target="_blank" href="https://curl.se/download.html">here</a>. You can use the <b>wget</b> program to download the package. Example (you must type the latest version number of the curl instead of the asterisk):</p>

  <p class="kodas"><samp>$</samp> <kbd>wget https://curl.se/download/curl-*.tar.gz</kbd></p>

  <p class="turinys">Once downloaded, archived, and compressed, the software package must be extracted. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>tar -xvf curl-*.tar.gz</kbd></p>

  <p class="turinys">In the next step, you need to enter to the extracted curl directory. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>cd curl-*</kbd></p>

  <p class="turinys">In the curl software documentation provided whith source code, the <i>docs/install.md</i> file contains instruction for installing the curl. The first step in the instruction indicates the excuting of the <b>./configure</b> script. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>./configure --prefix=/usr --libdir=/usr/lib64 --with-openssl</kbd></p>

  <p class="turinys"><b>Note</b>. In the example, the ./configure script is run with options. Option <i>--prefix=/usr</i> represents a future software location in the Peropesis file system, <i>--libdir=/usr/lib64</i> represents a future libraries location in the file system, <i>--with-openssl</i>  specifies to use OpenSSL.</p>

  <p class="turinys">The <b>make</b> program is called to start the compilation process. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>make</kbd></p>

  <p class="turinys">The <b>make install</b> command is used to install/copy the compiled software to file system. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>make install</kbd></p>

  <p class="turinys">After the last step, the curl software should be installed in the Peropesis file system. Let's call the program curl. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>curl --version</kbd></p>

  <p class="turinys">More information about make and its options can be found on the <b>make(1) man</b> page.</p>

  <p class="turinys">Below you can watch video about how to install <b>bc</b> software from source code. More information about bc can be found at <a target="_blank" href="https://git.gavinhoward.com/gavin/bc/">https://git.gavinhoward.com/gavin/bc/</a>.</p>

  <p class="turinys">
  <video controls>
  <source src="/media/installing-bc-software-from-source-code.mp4" type="video/mp4">
  Your browser does not support the video tag.
  </video>
  </p>

  <hr class="pavadinimas">

  <p><span id="unsorted-documentation" class="pavadinimas">11. Unsorted documentation</span></p>
  <p class="turinys">This chapter publishes the documentation that was not thematically close to the topic of any other chapter.</p>

  <hr class="pavadinimas">

  <p><span id="peropesis-live-iso-image" class="pavadinimas">11.1 Peropesis live ISO image</span></p>
  <p class="turinys">This chapter contains a file system (iso9660) plan of Peropesis optical disk image (ISO). Also this chapter provides an example of extracting an ISO image. One possible way to extract an ISO image is to mount the image into a file system. Tools such as <b>mount</b> and <b>loop</b> are used  for image mounting. These tools are distributed in most Linux distributions between them and in the Peropesis Linux distribution. Example of Peropesis ISO image mounting:</p>

  <p class="kodas"><samp>#</samp> <kbd>modprobe loop</kbd><br>
  <samp>#</samp> <kbd>mount -t iso9660 -o loop Peropesis-*-live.iso /mnt</kbd><br>
  mount: /mnt: WARNING: device write-protected, mounted read-only.<br>
  <samp>#</samp> <kbd>find /mnt  | sed -e 's;[^/]*/;|____;g;s;____|; |;g'</kbd><br>
  |____mnt<br>
| |____changelog.txt<br>
| |____images<br>
| | |____efiboot.img<br>
| | |____rootfs.xz<br>
| | |____usr.sqsh<br>
| |____isolinux<br>
| | |____boot.cat<br>
| | |____boot.txt<br>
| | |____isolinux.bin<br>
| | |____isolinux.cfg<br>
| | |____ldlinux.c32<br>
| |____kernel<br>
| | |____config<br>
| | |____vmlinuz<br>
| |____readme<br>
| |____readme2<br>
  <samp>#</samp> <kbd>ummount /mnt</kbd></p>

  <p class="turinys">A discussion of the elements contained in the <i>ISO</i> image:</p>

  <p class="turinys">
  1. <i>changelog.txt</i> - Peropesis distribucion change history.<br>
  2. <i>images</i> - the directory where the root filesystems is placed.<br>
  3. <i>efiboot.img</i> - <i>FAT32</i> type file system image, which is intended to work with motherboards with UEFI firmware.<br>
  4. <i>rootfs.xz</i> - Peropesis root filesystem.<br>
  5. <i>usr.sqsh</i> - squashed file system.<br>
  6. <i>isolinux</i> - <b>Isolinux</b> bootloader directory.<br>
  7. <i>boot.txt</i> - bootloader information message.<br>
  8. <i>isolinux.bin</i> - <b>Isolinux</b> bootloader.<br>
  9. <i>isolinux.cfg</i> - <b>Isolinux</b> bootloader configuration settings.<br>
  10. <i>ldlinux.c32</i> - module.<br>
  11. <i>kernel</i> - Linux kernel directory.<br>
  12. <i>config</i> - Linux kernel configuration file.<br>
  13. <i>vmlinuz</i> - Linux kernel.<br>
  14. <i>readme</i> - Peropesis distribution license.<br>
  15. <i>readme2</i> - List of software used in Peropesis Linux distribution.
  </p>

  <p><b>References</b></p>

  <p class="turinys">1. jlliagre (04-20-2008). What command can display files in a tree? Link: <a target="_blank" href="https://www.unix.com/302187300-post17.html">https://www.unix.com/302187300-post17.html</a></p>

  <hr class="pavadinimas">

  <p><span id="loading-of-required-firmware" class="pavadinimas">11.2 Loading of required firmware</span></p>

  <p class="turinys">Some hardware in Linux operating systems only works with certain types of commercial software, that does not have open source access and is therefore not included in the Linux kernel software package. This type of commercial software is called firmware and is distributed separately from the Linux kernel.</p>

  <p class="turinys">During Linux kernel boot, the kernel identifies hardware detected in the environment and enables it to run on the system. However, the hardware that requires additional commercial software (firmware) for its operation - and that firmware is not installed in the system - does not work.</p>

  <p class="turinys">Only a small number of firmware images are included in the Peropesis Linux distribution. If the Linux kernel identifies hardware, but does not find a firmware image in the Peropesis filesystem to communicate with that hardware, there is a real risk that the identified hardware will not work on the Peropesis system. When such a situation occurs, the system user is informed about it by an information message, the content of which looks something like this: "<i>Direct firmware load for [...] failed with error -2</i>".</p>

  <p class="turinys">If the system user received a message with such content from the kernel and after checking, the detected hardware is not working, but the user still wants to use the hardware, the following steps are required: a) to identify the firmware image name, b) to find the required image and/or download the image from the internet, c) to copy this image to the Peropesis filesystem, d) to reload the Linux kernel module that is responsible for communicating with this image. Further is explained how to do this.</p>

  <p class="turinys">1. Determining the exact image name of firmware not included in the Peropesis system but required for hardware operation. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>dmesg | grep firmware</kbd><br>
  [   11.489116] rtl18723be 0000:02:00.0: Using firmware rtlwifi/rtl18723befw_36.bin<br>
  [   11.489209] rtl18723be 0000:02:00.0: Direct firmware load for rtlwifi/rtl18723be_36.bin failed with error -2
  </p>

  <p class="turinys">Another way to find missing firmware could be to read the messages in the system or kernel logs. These logs are stored in the <i>/var/log</i> directory in the Peropesis system. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>cat /var/log/sys.log | less</kbd></p>

  <p class="turinys">The example shows that the kernel failed to load a firmware image named <i>rtl18723befw_36.bin</i>. At each boot, the Linux kernel looks for firmware images in the <i>/lib/firmware</i> file system directory. The example shows that the kernel looked for this image in the <i>rtlwifi/</i> directory. The full search path - <i>/lib/firmware/rtlwifi/rtl18723befw_36.bin</i>.</p>

  <p class="turinys">2. Finding and downloading a firmware image (in this case <i>rtl18723befw_36.bin</i>) on the internet. Most firmware images can be found in the Linux firmware git repository: <a target="_blank" href="https://git.kernel.org/pub/scm/linux/kernel/git/firmware/linux-firmware.git/tree/">https://git.kernel.org/pub/scm/linux/kernel/git/firmware/linux-firmware.git/tree/</a> The image we need in this repository is placed in the <a target="_blank" href="https://git.kernel.org/pub/scm/linux/kernel/git/firmware/linux-firmware.git/plain/rtlwifi/rtl8723befw_36.bin">rtlwifi/rtl8723befw_36.bin</a> directory. This image can be downloaded to the Peropesis system using tool <b>wget</b> or browser <b>links</b>. Example:</p>

  <p class="kodas"><samp>$</samp> <kbd>wget https://git.kernel.org/pub/scm/linux/kernel/git/firmware/linux-firmware.git/plain/rtlwifi/rtl8723befw_36.bin</kbd></p>

  <p class="turinys">If you do not have access to the Internet, you can use a USB device to upload the image to the Peropesis system (see chapter <a href="/user-manual/#installing-temporary-devices-in-the-/mnt-directory">Installing temporary devices in the /mnt directory</a>).</p>

  <p class="turinys">3. Copying the image to a dedicated directory. As mentioned above, the Linux kernel looks for firmware images in the <i>/lib/firmware</i> directory. The message sent from the kernel shows that it expected to find the <i>rtl18723befw_36.bin</i> image in the <i>rtlwifi/</i> directory. The next step should create this directory and move the required image into it. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>mkdir /lib/firmware/rtlwifi</kbd><br>
  <samp>#</samp> <kbd>mv rtl8723befw_36.bin /lib/firmware/rtlwifi</kbd></p>

  <p class="turinys">4. The last step is to reboot the Linux module. In our case, the <i>rtl18723be</i> module is responsible for communicating with this firmware image. The list of all loaded modules in the system can be viewed using the <b>lsmod</b> program. This module needs to be deleted and added again for the hardware to work. This can be done using the <b>modprobe</b> program. Example:</p>

  <p class="kodas"><samp>#</samp> <kbd>modprobe -r rtl18723be</kbd><br>
  <samp>#</samp> <kbd>modprobe rtl18723be</kbd></p>

  <p class="turinys">The end, now you can check to see if your hardware interface is working.</p>

  <p><b>References</b></p>

  <p class="turinys">1. A group of authors. Binary blob.  Link: <a target="_blank" href="https://en.wikipedia.org/wiki/Binary_blob">https://en.wikipedia.org/wiki/Binary_blob</a><br>
  2. The kernel development community. Linux Firmware API.  Link: <a target="_blank" href="https://www.kernel.org/doc/html/latest/driver-api/firmware/index.html">https://www.kernel.org/doc/html/latest/driver-api/firmware/index.html</a><br>
  3. Bruce Dubbs (2018-09-23). About Firmware  Link: <a target="_blank" href="https://www.linuxfromscratch.org/blfs/view/basic/firmware.html">https://www.linuxfromscratch.org/blfs/view/basic/firmware.html</a><br>
  4. A group of authors (Aug 4, 2015). Load unmodified firmware without rebooting.  Link: <a target="_blank" href="https://github.com/dhalperi/linux-80211n-csitool-supplementary/issues/91">https://github.com/dhalperi/linux-80211n-csitool-supplementary/issues/91</a></p>

<!-- -->

  </div>

  </div>

<!--Apacia-->
  <hr class="apacia">
  <div class="apacia">
  Copyright &copy; 2021-<?php echo date("Y");?> Peropesis. See <a href="/about-peropesis/#peropesis-authorise-and-licensing">license terms</a>.<br>E-mail: info(at)peropesis.org
  </div>

  </body>
</html>
