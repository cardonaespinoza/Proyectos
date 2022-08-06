Public Class Form1


    Private Sub Form1_Resize(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Resize
        If Me.WindowState = FormWindowState.Minimized Then
            Me.Hide()
            Me.NotifyIcon1.Visible = True
            Me.NotifyIcon1.BalloonTipTitle = "Arturo Cardona - Programas"
            Me.NotifyIcon1.BalloonTipText = "Notificaciones Habilitadas"
            Me.NotifyIcon1.ShowBalloonTip(0)
        End If
    End Sub

    Private Sub NotifyIcon1_DoubleClick(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles NotifyIcon1.DoubleClick
        Me.Show()
        Me.Activate()
        Me.WindowState = FormWindowState.Maximized
        Me.Focus()
        NotifyIcon1.Visible = False
    End Sub
End Class
